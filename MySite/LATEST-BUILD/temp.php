<?php
/*
    The program is nearly complete: it effectively saves and deletes session names using the "New Name" button.
    When a user inputs a name and hits send, the program operates flawlessly. Subsequently, the user can proceed to choose an image.

    However, we encounter errors when the user attempts to leave the name field empty.
    The current implementation displays the "What's your name?" box and prompts the user whether they wish to leave the field empty with a red button.
    Consequently, the normal box appears as well, as I haven't found a way to hide it until the user decides to provide or skip the name.
    Upon clicking the red button indicating "YES" to skip the name entry, the program proceeds to display the image selection page.
    Nevertheless, the two text-boxes and the red button persist on the page, failing to disappear.

    Although the core functionality is in place, addressing these errors is essential for seamless user interaction.
    I'm done for today, I will continue tomorrow.
*/

$form_field = '<form method="POST"action="./">
                 <input type="text" name="name"placeholder="What`s your name?"/>
<input type="submit" value="send"/></form>';
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

session_start(); // Start the session✔️

if (isset($_POST["name"])) {
    $_SESSION["name"] = $_POST["name"];
}

function end_session() {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to a new page
    header("Location: ./");
    exit; // Ensure no further code execution
}

// Check if the end session button is clicked
if(isset($_GET['end_session'])) {
    end_session();
}

/////////Title/////////////////////%%%%%
function web_title(){
   if (isset($_SESSION["name"]))    {
                echo  $_SESSION["name"];
                                    }
                                    if(empty($_SESSION["name"])){
                                                echo "Main Title";
                                    }
}

/////////Welcome message & re-start///////////////////%%%%%✔️
function web_welcome()    {

if (isset($_SESSION["name"])&&!empty($_SESSION['name'])) {
        echo "Hello, ".$_SESSION["name"].
            '<form method="GET"action="./">
                <a href="#"><button style="float:right;" type="submit" name="end_session">
                    New Name?</button></a>

                <hr>
            </form>';
        }
}
////////Form and empty form//////////////////////%%%%%
function web_form_name()                    {    global $form_field;

if (isset($_SESSION['name']) && empty($_SESSION['name'])) {
    echo 'EMPTY NAME?<span style="float:right;">
    <button style="float:left;background-color:red;color:white;margin:20px;">
    <a href="?noUserName">Yes.</a>
    </button></span>'.$form_field;
}                   if (empty($_SESSION['name']) && empty($_GET['noUserName']) ) {
    echo $form_field."(╯°□°）╯Normal^TextBox(╯°□°）╯";
                                         }
                      if (isset($_GET['noUserName']))  {
                        global $form_field_img;
    echo $form_field_img;
                     }
}

///////Images//////////////////////%%%%%
function web_form_no_name(){

    if (isset($_POST["name"]) && (!empty($_POST["name"]))) {                    global $form_field_img;
    echo $form_field_img;
    }

}

///////Image Selection///////////////////////%%%%%
function web_images()    {

if ($_SERVER["REQUEST_METHOD"] == "POST") {                            global $images;
          $selected_images = [];
      foreach ($images as $image) {
          if (isset($_POST[$image])) {
              $selected_images[] = $_POST[$image];
                                                                                                                          }
                                                                                                                    }
                                                                                                                      }
}
  ?>