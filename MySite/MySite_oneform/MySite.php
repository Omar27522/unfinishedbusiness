<!DOCTYPE>
<!--
    You can only interact with this page
    on a php server.###################
    I'm using WAMPSERVER on windows,
    and Pocket PHP on my phone' $$$$-->
<html lang=english>
  <head>
    <title> <?php if (isset($_POST["name"])) {
        $name = $_POST["name"];
        echo $name;
    } else {
        echo "Main Title";
    } ?> </title>
    <meta name="viewport" content="width = device-width
initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
  </head> <?php include "form.php"; ?> <body>
    <header>
      <h1>
        <span class="sty">Welcome!</span>
      </h1> <?php if (isset($_POST["name"])) {
          $name = $_POST["name"];
          if (empty($_POST["name"])) {
              echo "&nbsp;";
          } elseif (!empty($_POST["name"])) {
              echo "Hello, " .
                  $name .
                  '
				<button style="float:right;">
					<a href="./MySite.php">New Name?</a>
				</button>
				<hr>';
          }
      } ?>
    </header>
    <main>
      <aside> <?php if (isset($_POST["name"])) {
          echo "";
      } else {
          echo '
						<span class="sty">' .
              $form_field .
              "</span>";
      } ?> </aside>
      <article>
        <section> <?php if (isset($_POST["name"])) {
            if (empty($_POST["name"])) {
                echo "";
            }
        } ?> </section>
        <section> <?php
        if (isset($_POST["name"])) {
            if (empty($_POST["name"])) {
                echo '
							<h3>
								<span class="sty">Do not leave the
									<u>name</u> field empty.
								</span>
							</h3>
							<br />' . $form_field;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check which checkboxes are selected
            $selected_images = [];
            foreach ($images as $image) {
                if (isset($_POST[$image])) {
                    $selected_images[] = $_POST[$image];
                }
            }
            // Display the message if at least one checkbox is selected
            if (!empty($selected_images)) {
                echo '
							<h2>';
                if (count($selected_images) === 1) {
                    echo "This is the image you picked:";
                } else {
                    echo "These are the images you picked:";
                }
                echo "</h2>";
                foreach ($selected_images as $image_id) {
                    // You can use the $image_id to display the corresponding image or perform other actions
                    // For example:
                    echo '
							<img src="https://latinospc.com/images/websites/webcontent/' .
                        $image_id .
                        '.jpg" alt="Selected image">';
                }
            } elseif (empty($selected_images)) {
                echo '
								<h2>You did not select any images</h2>';
                foreach ($selected_images as $image_id) {
                    // You can use the $image_id to display the corresponding image or perform other actions
                    // For example:
                    echo '
								<img src="https://latinospc.com/images/websites/webcontent/' .
                        $image_id .
                        '.jpg" alt="Selected image">';
                }
            }
        }
        ?> </section>
      </article>
    </main>
    <footer>
      <span style="background-color:#ADD8E6;">By LAtinosPC.com 2024</span>
    </footer>
  </body>
</html>