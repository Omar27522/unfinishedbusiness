from PIL import Image, ImageDraw, ImageFont
import barcode
from barcode.writer import ImageWriter
from dataclasses import dataclass
from typing import Optional, Tuple
import os

def sanitize_filename(name: str) -> str:
    """Remove invalid characters from filename"""
    # Replace invalid characters with underscores
    invalid_chars = '<>:"/\\|?*\'"'
    for char in invalid_chars:
        name = name.replace(char, '_')
    # Remove any other non-printable characters
    name = ''.join(char for char in name if char.isprintable())
    return name

@dataclass
class LabelData:
    name_line1: str
    name_line2: str
    variant: str
    upc_code: str

class BarcodeGenerator:
    def __init__(self, settings):
        self.settings = settings
        self._setup_fonts()

    def _setup_fonts(self):
        """Setup font paths and sizes"""
        try:
            fonts_dir = os.path.join(os.path.dirname(os.path.dirname(os.path.abspath(__file__))), "fonts")
            
            # Check if fonts directory exists
            if not os.path.exists(fonts_dir):
                raise FileNotFoundError("Fonts directory not found. Please make sure the 'fonts' directory exists with arial.ttf and arialbd.ttf")
            
            # Use Arial Bold for large text
            arial_bold_path = os.path.join(fonts_dir, "arialbd.ttf")
            if not os.path.exists(arial_bold_path):
                raise FileNotFoundError("arialbd.ttf not found in fonts directory")
            self.font_large = ImageFont.truetype(arial_bold_path, self.settings.font_size_large)
            
            # Use Regular Arial for medium text
            arial_path = os.path.join(fonts_dir, "arial.ttf")
            if not os.path.exists(arial_path):
                raise FileNotFoundError("arial.ttf not found in fonts directory")
            self.font_medium = ImageFont.truetype(arial_path, self.settings.font_size_medium)
            
        except Exception as e:
            print(f"Error setting up fonts: {e}")
            print("Using default font as fallback")
            self.font_large = ImageFont.load_default()
            self.font_medium = ImageFont.load_default()

    def generate_barcode_image(self, upc_code: str) -> Optional[Image.Image]:
        """Generate barcode image using python-barcode"""
        try:
            # Ensure UPC code is exactly 12 digits
            upc_code = str(upc_code).strip()
            if len(upc_code) != 12 or not upc_code.isdigit():
                raise ValueError(f"Invalid UPC code: {upc_code}. Must be exactly 12 digits.")

            # Create UPC-A barcode
            barcode_class = barcode.get_barcode_class('upc')
            barcode_writer = ImageWriter()
            
            # Use settings from config
            barcode_writer.set_options({
                'module_height': self.settings.BARCODE_MODULE_HEIGHT,
                'module_width': self.settings.BARCODE_MODULE_WIDTH,
                'quiet_zone': self.settings.BARCODE_QUIET_ZONE,
                'font_size': self.settings.BARCODE_FONT_SIZE,
                'text_distance': self.settings.BARCODE_TEXT_DISTANCE,
                'write_text': True,       # Show the UPC number
                'background': 'white',    # White background
                'foreground': 'black'     # Black bars
            })
            
            # Generate barcode
            barcode_obj = barcode_class(upc_code, writer=barcode_writer)
            barcode_image = barcode_obj.render()
            
            # Set fixed dimensions
            target_width = 700   # Increased width for better bar separation
            target_height = 350  # Increased height
            
            # Resize using high-quality resampling
            barcode_image = barcode_image.resize(
                (target_width, target_height), 
                Image.Resampling.LANCZOS
            )
            
            return barcode_image
        except Exception as e:
            print(f"Error generating barcode: {e}")
            return None

    def generate_label(self, data: LabelData) -> Optional[Image.Image]:
        """Generate complete label with text and barcode"""
        try:
            # Create blank label
            label = Image.new('RGB', (self.settings.LABEL_WIDTH, self.settings.LABEL_HEIGHT), 'white')
            draw = ImageDraw.Draw(label)

            # Configure default colors
            text_color = (0, 0, 0)  # Black color for text
            
            # Draw text elements
            # Name Line 1 (fixed position at 20,20)
            if data.name_line1:
                draw.text((20, 20), data.name_line1, font=self.font_large, fill=text_color)
            
            # Name Line 2 (position depends on Name Line 1)
            if data.name_line2:
                name1_height = draw.textbbox((0, 0), data.name_line1 if data.name_line1 else "", font=self.font_large)[3]
                draw.text((20, 20 + name1_height), data.name_line2, font=self.font_large, fill=text_color)

            # Variant text position
            if data.variant:
                text_width = draw.textlength(data.variant, font=self.font_medium)
                x = (self.settings.LABEL_WIDTH - text_width) // 2
                draw.text((x, 165), data.variant, font=self.font_medium, fill=text_color)

            # Generate barcode
            barcode_image = self.generate_barcode_image(data.upc_code)
            if barcode_image:
                # Calculate position to center barcode
                x = (self.settings.LABEL_WIDTH - barcode_image.width) // 2
                y = 260  # Adjusted to be lower
                
                # Create a white background for the barcode
                bg_width = barcode_image.width + 20  # Add padding
                bg_height = barcode_image.height + 20
                bg_x = x - 10  # Adjust for padding
                bg_y = y - 10
                draw.rectangle([bg_x, bg_y, bg_x + bg_width, bg_y + bg_height], fill='white')
                
                # Paste barcode onto label
                label.paste(barcode_image, (x, y))

            return label
        except Exception as e:
            print(f"Error generating label: {e}")
            return None

    def _add_text_to_label(self, draw: ImageDraw.ImageDraw, data: LabelData):
        """Add text elements to the label"""
        # Calculate text positions
        name1_pos = self._center_text(data.name_line1, self.font_large, self.settings.LABEL_WIDTH)
        name2_pos = self._center_text(data.name_line2, self.font_large, self.settings.LABEL_WIDTH)
        variant_pos = self._center_text(data.variant, self.font_medium, self.settings.LABEL_WIDTH)

        # Draw text
        draw.text((name1_pos, 20), data.name_line1, font=self.font_large, fill='black')
        draw.text((name2_pos, 80), data.name_line2, font=self.font_large, fill='black')
        draw.text((variant_pos, 140), data.variant, font=self.font_medium, fill='black')

    def _center_text(self, text: str, font: ImageFont.FreeTypeFont, width: int) -> int:
        """Calculate x position to center text"""
        text_width = font.getlength(text)
        return (width - text_width) // 2

    def generate_and_save(self, data: LabelData, save_dir: str):
        """Generate and save label with consistent filename format"""
        # Generate the label
        label_image = self.generate_label(data)
        if label_image:
            # Create filename in same format as CSV: NAME Second NAME_Variant_label_123456789123
            safe_name1 = sanitize_filename(data.name_line1)
            safe_name2 = sanitize_filename(data.name_line2) if data.name_line2 else ""
            safe_variant = sanitize_filename(data.variant)
            
            if safe_name2:
                filename = f"{safe_name1} {safe_name2}_{safe_variant}_label_{data.upc_code}.png"
            else:
                filename = f"{safe_name1}_{safe_variant}_label_{data.upc_code}.png"
            
            filepath = os.path.join(save_dir, filename)
            label_image.save(filepath)
            return True
        return False
