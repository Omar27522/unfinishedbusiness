<html
    <?php
    /*include_once('../functions.php');// delete this and change directories on functions file or create a new one specifically for this one
    $obj = new es_directory2();
    $page = new page_content();*/
    echo $obj->lang;
    ?>>
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>
        <?php titles();?>
    </title>
    <link rel="stylesheet" href=
        <?php
            echo $obj->c_ss;
    ?>  >
    <link rel="stylesheet" href=
        <?php
            echo $obj->c_ss2;
    ?>  >
        <!-- Write a function that takes the c_ss3, c_ss4, and c_ss5... from the subfolder| By doing this, you will successfully systematize the structure of the site. I can't put it into words but perhaps, you understand what IO am trying to say. -->
</head>
<body>
<main>
<header>
    <span class="crumbs">
        <?php
            echo $obj->crumbs;
        ?>
    </span>
    <a href="#" class="phone">
        909-276-7214
    </a>
    <div class="logo">
        <span>
            LA</span>tinos<span>PC</span>.com
        <?php
            echo $obj->logo;
        ?>
    </div><br />
    <nav><!--    TerwanPOP    -->
        <div role="navigation" class="prro">
            <div id="menuToggle"><input type="checkbox" />
                <span></span><span></span><span></span>
                <ul id="menu">
                    <?php
                        echo $obj->nav_menu;
                    ?>
                </ul>
            </div>
        </div><!--    TerwanPOP Made by Erik Terwan    -->
        <?php
            echo $obj->nav_buttons;
        ?>
    </nav>
</header>
<article>
    <section>
        <?php
            echo $page->content();
        ?>
    </section>
</article>
</main>
<footer id="footer">
    <?php
        echo $obj->footer;
    ?>
</footer>
</body>
</html>