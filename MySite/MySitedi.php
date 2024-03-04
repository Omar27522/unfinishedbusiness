<!DOCTYPE>
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
<?php $form_field = '<form method="post"action="MySite.php">
					<input type="text" name="name"placeholder="What`s your name?"/>
						<input type="submit" value="send"/></form>'; ?>

<body>
<header>
<h1><span class="sty">Welcome!</span></h1>

    <?php if (isset($_POST["name"])) {
        $name = $_POST["name"];
        if (empty($_POST["name"])) {
            echo "&nbsp;";
        } elseif (!empty($_POST["name"])) {
            echo "Hello, " .
                $name .
                '<button style="float:right;"><a href="./MySite.php">New Name?</a></button><hr>';
        }
    } ?>
	
</header>
<main>

<aside>
    <?php if (isset($_POST["name"])) {
        echo "";
    } else {
        echo '<span class="sty">' . $form_field . "</span>";
    } ?>

</aside>
</div>
<article>
<section>
    <?php if (isset($_POST["name"])) {
        if (empty($_POST["name"])) {
            echo '<h3><span class="sty">Please, do not leave
            the <u>name</u> field empty.</span></h3>
<br />' . $form_field;
        } elseif (!empty($_POST["name"])) {
            echo '
<img src="https://latinospc.com
/images/websites/webcontent/22.jpg"
alt="image">
<h2>This is your page.</h2>
<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit. Sem integer vitae justo eget magna. Elementum nisi quis eleifend quam adipiscing vitae. Mauris ultrices eros in cursus. Dolor sit amet consectetur adipiscing. Ipsum consequat nisl vel pretium lectus. Amet risus nullam eget felis eget nunc lobortis mattis aliquam. Ac orci phasellus egestas tellus. Duis convallis convallis tellus id. Tortor aliquam nulla facilisi cras fermentum odio eu. Consectetur adipiscing elit duis tristique sollicitudin. Ultricies lacus sed turpis tincidunt id. Non enim praesent elementum facilisis leo vel. Suspendisse potenti nullam ac tortor vitae purus. Risus in hendrerit gravida rutrum quisque non tellus orci. Rhoncus urna neque viverra justo. Ultrices eros in cursus turpis massa tincidunt dui ut. Enim sed faucibus turpis in eu mi bibendum neque egestas.
<br />
Imperdiet sed euismod nisi porta. Aliquet enim tortor at auctor urna nunc id cursus. Urna neque viverra justo nec ultrices dui sapien. At ultrices mi tempus imperdiet. Velit euismod in pellentesque massa placerat duis ultricies lacus sed. Morbi tristique senectus et netus. Iaculis urna id volutpat lacus. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Morbi blandit cursus risus at. Massa massa ultricies mi quis hendrerit dolor magna eget est. Curabitur vitae nunc sed velit.
<br />
Urna condimentum mattis pellentesque id nibh tortor. Pharetra pharetra massa massa ultricies mi quis hendrerit. Scelerisque eu ultrices vitae auctor eu augue ut lectus arcu. Egestas diam in arcu cursus euismod. Lectus arcu bibendum at varius vel pharetra. Eget mauris pharetra et ultrices. Duis ut diam quam nulla porttitor massa id neque aliquam. Feugiat scelerisque varius morbi enim nunc faucibus. Eget mi proin sed libero enim. Bibendum est ultricies integer quis auctor elit sed. Euismod elementum nisi quis eleifend quam adipiscing vitae. Ornare arcu odio ut sem nulla. Senectus et netus et malesuada fames ac turpis. Quisque non tellus orci ac. Aliquet risus feugiat in ante metus dictum at tempor. Consequat id porta nibh venenatis cras sed felis eget. In dictum non consectetur a. Sollicitudin ac orci phasellus egestas.
<br />
Lacinia at quis risus sed vulputate odio. Amet nulla facilisi morbi tempus iaculis urna id volutpat lacus. Mattis vulputate enim nulla aliquet porttitor lacus. Sed velit dignissim sodales ut eu sem integer. Et sollicitudin ac orci phasellus egestas tellus rutrum. Diam volutpat commodo sed egestas egestas fringilla phasellus. In massa tempor nec feugiat nisl pretium fusce id. Eget nullam non nisi est sit amet. Est lorem ipsum dolor sit amet. Tortor at auctor urna nunc id. Mauris in aliquam sem fringilla. Proin sed libero enim sed faucibus turpis. Imperdiet massa tincidunt nunc pulvinar. Libero volutpat sed cras ornare. At varius vel pharetra vel.
<br />
Purus in mollis nunc sed id. Non quam lacus suspendisse faucibus. Cras semper auctor neque vitae tempus quam pellentesque. Eu mi bibendum neque egestas congue quisque. Posuere ac ut consequat semper. Orci eu lobortis elementum nibh tellus. Tortor at auctor urna nunc id cursus. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Sit amet consectetur adipiscing elit duis. Commodo ullamcorper a lacus vestibulum sed arcu non. At risus viverra adipiscing at in. Erat nam at lectus urna duis. At tempor commodo ullamcorper a lacus vestibulum sed arcu. Sapien et ligula ullamcorper malesuada.
<br />
Ac ut consequat semper viverra nam. Porttitor eget dolor morbi non. Dolor sit amet consectetur adipiscing elit ut aliquam purus. Sagittis orci a scelerisque purus semper eget duis at. Id velit ut tortor pretium viverra suspendisse. Non consectetur a erat nam. Luctus venenatis lectus magna fringilla. Turpis tincidunt id aliquet risus feugiat. In nibh mauris cursus mattis molestie a iaculis at. Magna etiam tempor orci eu lobortis. Eros donec ac odio tempor orci dapibus ultrices. Rutrum quisque non tellus orci ac auctor augue mauris augue. Sit amet facilisis magna etiam tempor orci eu lobortis elementum. Semper eget duis at tellus. Volutpat consequat mauris nunc congue nisi vitae suscipit. Sed nisi lacus sed viverra tellus in hac habitasse platea.
<br />
Congue mauris rhoncus aenean vel elit scelerisque mauris. Malesuada fames ac turpis egestas sed tempus urna. Sollicitudin aliquam ultrices sagittis orci a. Nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus. Vestibulum lectus mauris ultrices eros in cursus turpis massa. Porttitor eget dolor morbi non arcu risus quis. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. In hendrerit gravida rutrum quisque non tellus. A lacus vestibulum sed arcu. Vehicula ipsum a arcu cursus. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Turpis egestas sed tempus urna et pharetra pharetra massa. Erat velit scelerisque in dictum non. Volutpat odio facilisis mauris sit amet massa.
<br />
Mattis aliquam faucibus purus in massa tempor nec. Interdum varius sit amet mattis vulputate enim. Augue ut lectus arcu bibendum at varius vel pharetra vel. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Scelerisque purus semper eget duis. Arcu cursus euismod quis viverra nibh. Convallis convallis tellus id interdum velit laoreet id. Arcu non odio euismod lacinia at quis risus. Tellus orci ac auctor augue mauris augue neque gravida. Dolor magna eget est lorem ipsum. Facilisis volutpat est velit egestas dui id ornare. Quis blandit turpis cursus in hac habitasse.
<br />
Facilisis volutpat est velit egestas dui id ornare arcu odio. Id semper risus in hendrerit gravida rutrum. Felis eget nunc lobortis mattis aliquam. Viverra adipiscing at in tellus integer feugiat scelerisque. Donec adipiscing tristique risus nec feugiat in fermentum. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Leo a diam sollicitudin tempor. Ullamcorper malesuada proin libero nunc consequat interdum varius sit amet. Orci phasellus egestas tellus rutrum tellus pellentesque eu. Nisl condimentum id venenatis a. Et egestas quis ipsum suspendisse. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum. Orci a scelerisque purus semper eget duis at tellus.
<br />
Porta nibh venenatis cras sed felis eget velit aliquet sagittis. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Consequat semper viverra nam libero justo laoreet. Sit amet venenatis urna cursus eget. Malesuada fames ac turpis egestas sed tempus urna et. Hendrerit dolor magna eget est lorem. Convallis posuere morbi leo urna molestie at elementum eu. Elementum tempus egestas sed sed risus pretium quam vulputate dignissim. Sed arcu non odio euismod lacinia at quis. Quam pellentesque nec nam aliquam sem. Cras adipiscing enim eu turpis egestas. Vel eros donec ac odio tempor orci dapibus ultrices in.</h3>
    ';
        }
    } ?>
    
</section>

</article>

</main>
<footer>
<span style="background-color:#ADD8E6;">By LAtinosPC.com 2024</span>
</footer>
</body>
</html>