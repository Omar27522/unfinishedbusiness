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
  </head> <?php /*change the action to your file name and location*/
include('forms.php');
?> <body>
    <header>
      <h1>
        <span class="sty">Welcome!</span>
      </h1> <?php if (isset($_POST["name"])) {
        $name = $_POST["name"];
        if (empty($_POST["name"])) {
    echo "&nbsp;";
        } elseif (!empty($_POST["name"])) {
    echo "Hello, ".
    $name.
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
																<span class="sty">'.
        $form_field."</span>";
    } ?> </aside>
      <article>
        <section> <?php if (isset($_POST["name"])) {
 if (empty($_POST["name"])) {
echo $form_field_img; }}?> </section>
        <section> <?php if (isset($_POST["name"])) {
        if (empty($_POST["name"])) {
            echo '
																	<h3>
																		<span class="sty">Please, do not leave
            the 
																			<u>name</u> field empty.
																		</span>
																	</h3>
																	<br />' . $form_field;
        } elseif (!empty($_POST["name"])) {
            echo $form_field_img;}}
    
    
     ?> </section>
        <section> <?php /*This section is a bit ticky
                                        I know I'm missing something, but
                                i just can't put my finger on it.
                                
                                After the user submits the first form
                                I want the name to be stored, and also the image that was selected.
                                then after that another question will get asked.
                                
                                Then at the end of the three screens
                                the user will be presented with all their answers
                                and a reminder on which line itmes were skipped.
                                
                                that's basically this project.
                                
                                the first part works. the page accepts a name
                                and it displays it, or it doesn't  have a name,
                                but the user gets a reminder. 
                                
                                 */
                                
                                
                                
    if (isset($_POST['name'])) 
     { // Display the images section if the form is submitted
     foreach ($images as $image) { 
    if (isset($_POST[$image]) && 
    !empty($_POST[$image])) 
    { echo
     '
																	<hr>Here is the picture you selected:'; 
    // Output the image here
 } } }
    
    ?> </section>
      </article>
      <div style="padding:1px;margin:20px;" </main>
        <footer>
          <span style="background-color:#ADD8E6;">By LAtinosPC.com 2024</span>
        </footer>
  </body>
</html>