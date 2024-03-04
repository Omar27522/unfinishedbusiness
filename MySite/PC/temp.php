<?php                   include ('vars.php');
                                    //display the image selection-form
    function image_select_form()        {
        global $img_ff;                     //ff stands for form field
            echo $img_ff;
}

                                //checks name; displays message if no-name was imputed
    function check_name($empty_message)     {
        if (empty($_POST["name"]))      {
        echo '<h3><span class="sty">Do not leave <u>name</u> field empty</span></h3>';
        }
        else    {
            echo '<h2>'.$_POST["name"].'</h2>';
        }
}

    function image_select_user ()       {
        global $images;
         $selected_images =[];
            foreach ($images as $image)     {
                if(isset($_POST[$image])) {
                    $selected_images[] = $_POST[$image];
                }
            }
            //Displays image based on selection
            if(!empty($selected_images))        {
                echo '<h2><span class="sty" style="color:green;font-size:xxx-large;">Yay!</span><br />';
                if(count($selected_images)===1){
                    echo "This' the image you picked";
                }   else    {
                    echo "These are the images you picked";     }
                echo '</h2>';
                foreach ($selected_images as $image_id){
                    echo '<img src="https://latinospc.com/images/websites/webcontent/' . $image_id . '.jpg" alt="Selected image">';
                }
            }   else    {
                echo '<h2>You did not select any images</h2>';
            }
}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        check_name("not full");
        if (!empty($_POST["name"])) {
            // Display image selection form here
            image_select_form();
            // Call function to handle image selection after displaying the form
            image_select_user();
          } else { global $form_field ;
            // Display form to enter name if name is empty in POST data
            echo '<span class="sty">' . $form_field . "not full</span>";
          }
    }


    global $images;
print_r($images);
?>