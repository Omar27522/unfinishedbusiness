<!DOCTYPE>
                                                                                                                                                        <!--
    You can only interact with this page
    on a php server.###################
    I'm using WAMPSERVER on windows,
    and Pocket PHP on my phone' $$$$-->
<html lang=english>
<head>
        <title><?php if (isset($_POST["name"])) {
            $name = $_POST["name"];
            echo $name;
        } else {
            echo "Main Title";
        } ?></title>
                    
<meta name ="viewport" 
content = "width = device-width
initial-scale=1.0" />

<style>
h1{color:green;}

h2{color:blue;}

img{margin:4px 16px 4px 0;float:right;}

footer{margin-top:3%;padding:20%;position:fixed;
bottom:0;padding-bottom:.5rem;

}

aside{width:40%;margin-left:1px;}

body{
    background-color:#ADD8E6;
    margin-right: auto;
  margin-left: 10%;
  max-width: 1080px;
  }
.sty{background-color:#DEEFF5;}
</style></head>
<?php /*change the action to your file name and location*/
$form_field = '<form method="post"action="MySite_old.php">
                 <input type="text" name="name"placeholder="What`s your name?"/>
                   <input type="submit" value="send"/></form>';
                        
$form_field_img ='<h2>Pick an Image</h2><form method="post"action="temp.php">
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
?>

<body>
<header>
<h1><span class="sty">Welcome!</span></h1>

    <?php if (isset($_POST["name"])) {
        $name = $_POST["name"];
        if (empty($_POST["name"])) {
    echo "&nbsp;";
        } else {
    echo "Hello, ".
    $name.
    '<button style="float:right;">
      <a href="./MySite_old.php">New Name?</a>
       </button><hr>';
        }
    } ?>
    
</header>
<main>

<aside>
    <?php
    
    
     if (!empty($_POST["name"])) {
        echo "full";
    } else {
        echo '<span class="sty">'.
        $form_field."not full</span>";
    }
    
    
     ?>   
</aside>
<article>

<section>
<?php if (isset($_POST["name"])) {
 if (empty($_POST["name"])) {
echo $form_field_img."not full"; }}?>
</section>

<section>
    <?php
    if (isset($_POST["name"]))
    {
        if (empty($_POST["name"]))
         {
            echo '<h3><span class="sty">Please, do not leave
            the <u>name</u> field empty.</span></h3>';
        } elseif (!empty($_POST["name"])) 
        {
            echo $form_field_img;
            }
            }
    
    
     ?>
    
</section>
</article>
<div style="padding:1px;margin:20px;"
</main>
<footer>
<span style="background-color:#ADD8E6;">By LAtinosPC.com 2024</span>
</footer>
</body>
</html>