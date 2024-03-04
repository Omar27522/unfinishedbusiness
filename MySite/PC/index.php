<!DOCTYPE>
<?php        include_once('temp.php');        ?>
<html lang=english>
<head>
        <title>
        <?php        web_title();        ?>
        </title>
        <meta name ="viewport"
    content = "width = device-width
    initial-scale=1.0"/>
        <link rel="stylesheet"href="style.css">
</head>
<body>

<header>
<h1><span class="sty">Welcome!</span></h1>
    <?php        web_welcome();        ?>
</header>
<main>

<aside>
    <?php        web_form_name();        ?>
</aside>
<article>
<section>
    <?php         web_form_no_name();		?>
</section>

<section>
    <?php        web_images();        ?>
</section>
</article>
</main>
<footer>
<span style="background-color:#ADD8E6;">By LAtinosPC.com 2024</span>
</footer>
</body>
</html>

<!--This is the last iteration of the code, but I was workig on the temp file.
-Now, what must be done is to call the functions from temp, and display the full site
but I keep having the same issues. as documented on MySite.rtf-->
