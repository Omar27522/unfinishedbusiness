<?php
    $form_field_img ='<h2><span class="sty">Pick an Image</span></h2><form method="post"action="./">
    <label for="fav_img4"><img src="https://latinospc.com/images/websites/webcontent/33.jpg"alt="image"></label>
    <label for="fav_img3"><img src="https://latinospc.com/images/websites/webcontent/44.jpg"alt="image"></label>
    <label for="fav_img2"><img src="https://latinospc.com/images/websites/webcontent/1010.jpg"alt="image"></label>
    <label for="fav_img1"><img src="https://latinospc.com/images/websites/webcontent/99.jpg"alt="image"></label>
    <input type="checkbox" id="fav_img1" name="fav_img1" value="99">
    <label for="fav_img1">One</label><br>
    <input type="checkbox" id="fav_img2" name="fav_img2" value="1010">
    <label for="fav_img2">Two</label><br>
    <input type="checkbox" id="fav_img3" name="fav_img3" value="44">
    <label for="fav_img3">Three</label><br>
    <input type="checkbox" id="fav_img4" name="fav_img4" value="33">
    <label for="fav_img4">Four</label>
    <input type="submit" value="images"/></form>';

    $images=array("fav_img1","fav_img2","fav_img3","fav_img4");

    $form_field = '<form method="post"action="./">
                 <input type="text" name="name"placeholder="What`s your name?"/>
    <input type="submit" value="send"/></form>';

function web_title(){                   //check if name has been set. if it has not Main title will be the title of the page, otherwise the name typed is the new site name.
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        echo $name;
    } else {
        echo "Main Title";
    }
}


function web_welcome(){
    if (isset($_POST["name"])) {                    //checks for user's input, if it doesnt
        $name = $_POST["name"];
        if (empty($_POST["name"])) {
    echo "Type your name<br /><br />";
        } else {
    echo "Hello, ".
    $name.
    '<button style="float:right;">
      <a href="./">New Name?</a>
       </button><hr>';
        }
    }
}


function web_form_name(){
    global $form_field;
    if (!empty($_POST["name"])) {
        echo "full";
    } else {
        echo '<span class="sty">'.
        $form_field."</span>";
    }
}


function web_form_no_name(){
    if (isset($_POST["name"])) {
         if (empty($_POST["name"])) {
            global $form_field_img;
            echo $form_field_img."function web_form_no_name"; }}
}


function web_display_images(){
    if (isset($_POST["name"])){
        if (empty($_POST["name"])){
    echo'<h3><span class="sty">Please, do not leave
    the <u>name</u> field empty.</span></h3>';    }
         else if (!empty($_POST["name"])) {
            global $form_field_img;
    echo $form_field_img;
    }
        }
}


function web_images(){
    if (isset($_POST['images'])){
    echo 1;
    }
 if (empty($_POST['name'])
    //&& !empty($selected_images)
    ){
  //  echo '<h1>yay!</h1>';
    }
    else{
    global $name, $form_field_img;
    $name = $_POST["name"];
    echo "<h2>".$name."</h2>".$form_field_img;
    return 1;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $images;
          $selected_images = [];
      foreach ($images as $image) {
          if (isset($_POST[$image])) {
              $selected_images[] = $_POST[$image];
          }
      }
    // Display the message if at least one checkbox is selected
    if (!empty($selected_images)) {
      echo '
                      <h2><span class="sty" style="color:green;font-size:xxx-large;">Yay!</span><br /> ';
    if (count($selected_images) === 1) {
          echo "This is the image you picked:";
          }
    else {
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
      }
    elseif(empty($selected_images))
 {
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
}
  ?>
