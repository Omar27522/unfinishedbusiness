<?php
class directory1    {
    public $lang;
    public $c_ss;
    public $c_ss2;
    public $crumbs;
    public $logo;
    public $nav_menu;
    public $nav_buttons;
    public $footer;
    function __construct()  {

        $this->lang="lang=\"en-US\"";
        $this->c_ss ="\"./code/style.css\"";//I have to figure out a way to merge these two together.
        $this->c_ss2 ="\"./code/terwanpop.css\"";
        $this->crumbs  =  '<a href="./service/">Service</a>&nbsp;<a href="./parts/">Parts</a>&nbsp;<a href="./apps/">Software</a>';
        $this->logo = '<small>PC is for Personal Computer</small>';
        $this->nav_menu ='<li class="titleli">Our Lord and Savior Jesus Christ</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Heavenly Father Tell me about the Web</li></a><a href="#"><li>Our Lord and Savior Jesus Christ</li></a><a href="#"><li>Info</li></a><a href="#"><li>Contact</li></a><a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>';
        $this->nav_buttons ='<button><a href="./">Home</a></button><button><a href="./spanish/">Español</a></button><button><a href="./services/">Services</a></button><button><a href="./contact/">Contact&nbsp;Us</a></button><button><a href="./reviews/">Reviews</a></button>';
        $this->footer = 'Site\'s footer';
    }
}

class directory2    {
    public $lang;
    public $c_ss;
    public $c_ss2;
    public $crumbs;
    public $logo;
    public $nav_menu;
    public $nav_buttons;
    public $footer;
    function __construct()  {

        $this->lang="lang=\"en-US\"";
        $this->c_ss ="\"../code/style.css\"";//Took several minutes to figure this out XD
        $this->c_ss2 ="\"../code/terwanpop.css\"";
        $this->crumbs  =  '<a href="../service/">Service</a>&nbsp;<a href="../parts/">Parts</a>&nbsp;<a href="../apps/">Software</a>';
        $this->logo = '<small>PC is for Personal Computer</small>';
        $this->nav_menu ='<li class="titleli">Our Lord and Savior Jesus Christ</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Heavenly Father Tell me about the Web</li></a><a href="#"><li>Our Lord and Savior Jesus Christ</li></a><a href="#"><li>Info</li></a><a href="#"><li>Contact</li></a><a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>';
        $this->nav_buttons ='<button><a href="../">Home</a></button><button><a href="../spanish/">Español</a></button><button><a href="../services/">Services</a></button><button><a href="../contact/">Contact&nbsp;Us</a></button><button><a href="../reviews/">Reviews</a></button>';
        $this->footer = 'Site\'s footer';
    }
}

class es_directory2    {

    public $lang;
    public $c_ss;
    public $c_ss2;
    public $crumbs;
    public $logo;
    public $nav_menu;
    public $nav_buttons;
    public $footer;
    function __construct()  {

        $this->lang="lang=\"es-US\"";
        $this->c_ss ="\"../code/style.css\"";//Took several minutes to figure this out XD
        $this->c_ss2 ="\"../code/terwanpop.css\"";
        $this->crumbs  =  '<a href="../servicio/"> Servicio</a>&nbsp;<a href="../partes/">Partes</a>&nbsp;<a href="../software/">Apps</a>';
        $this->logo = '<small>PC por Computadora Personal</small>';
        $this->nav_menu ='<li class="titleli">Nuestro Señor y Salvador Jesus Cristo</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Padre en el Cielo dime acerca de la Web</li></a><a href="#"><li>Nuestro Señor y Salvador Jesus Cristo</li></a><a href="#"><li>Informacion</li></a><a href="#"><li>Contacto</li></a><a href="https://erikterwan.com/" target="_blank"><li>Descubre mas!</li></a>';
        $this->nav_buttons ='<button><a href="../spanish/">Inicio</a></button><button><a href="../">English</a></button><button><a href="../servicios/">Servicios</a></button><button><a href="../contacto/">Contacta&nbsp;Nos</a></button><button><a href="../criticas/">Reseñas</a></button>';
        $this->footer = 'Piecera del Sitio';
    }
}
/*$code = new es_directory2();
echo $code->c_ss;*/


function titles() {
    // Get the current URL path
    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // Split the URL path into an array of directory names
    $directories = explode('/', rtrim($url_path, '/'));

    // Get the last directory name (page name)
    $page = end($directories);

    // Define titles based on the page name
    switch ($page) {
        case 'services':
            echo "Services";
            break;
        case 'about':
            echo "Title for About Page";
            break;
        case 'apps':
            echo "Software";
            break;
        case 'reviews':
            echo "Reviews";
            break;
        case 'service':
            echo "Service and Repair";
            break;
        case 'parts':
            echo "Hardware";
            break;
        case 'contact':
            echo "Contact";
            break;
        case 'spanish':
            echo "Español";
            break;
        case 'servicio':
            echo "Servicio";
            break;
        case 'partes':
            echo "Hardware";
            break;
        case 'software':
            echo "Apps";
            break;
        case 'servicios':
            echo "Servicios";
            break;
        case 'contacto':
            echo "Contactenos";
            break;
        case 'criticas':
            echo "Reseñas";
            break;
        default:
            echo "LATPC";
            break;
    }
}

// Call the function to output the title

$obj = new directory1();
    $page = new page_content();

class page_content    {
    
        function content ()    {
            echo '<section>';
            echo '    The words on the page shrink
            as the browser window on a PC
            shrinks.
            
                Is that intended?
                    Yes.
            
                The overall look and feel
            is starting to set in.
            
                    What\'s next?
            
                The side menu works great
            on mobile, portrait mode.
            Landscape mode on mobile is a
            terrible experience, although
            the menu doesn\'t show when not
            in use, it looks too big.
            Landscape mode has proven to break
            the site\'s footer.
            
                    What about site\'s content?
            Firstly, I believe is fair to say,
            that resources are going mostly towards
            the structure of the site, and its
            navigational feel. The mission
            statement of the site is a close
            second. I fix computers for a living,
            but now all of my free time has been
            dedicated to the site. I hope to finish
            soon. Maybe there after more keyboards
            will arrive.';
            echo '</section>';
        }
           
}
?>
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
   <style>
*        {
    margin:1px;
    padding:0px;
    box-sizing:border-box;
   }
html        {
    font-size:calc(1.5vw + 1.5vh);
    overflow-wrap:break-word;
   }
body        {
position:relative;
    width:100%;
    min-height:100vh;
    /*border:2px dashed green;*/
    background-color:lightgray;
   }
main        {
    /*border:dashed blue;*/
    width:100%;
 }
article    {
    margin:3%;
    padding-bottom:9%;
    margin-top:7%
}
main header         {
    width:100%;
    height:auto;
    /*border :2px dashed rgb(205, 7, 7);*/
    padding:5% 1% 0% 1%;
    position:relative;
    background-color:cornflowerblue;

}
.crumbs        {
    color:midnightblue;
    position:absolute;
    top:0;
    left:5%;
}
.phone        {
    color:lightgray;
    position:absolute;
    top:0;
    z-index: 1;
    right:5%
}
header .logo    {
    /*border:1px dashed beige;*/
    font-size:calc(3vw + 3vh);
    color:midnightblue;
    display:inline;
    float:left;
    width:100%;
}
header small        {
    font-size:calc(.7vw + .7vh);
    /*position:absolute;*/
   margin-top:auto;
    /*border:1px solid yellow;*/
    /*display:inline-block;*/
    float:right;
    /*transform:translate(0% -10px);*/
}
header span        {
    color:aliceblue;
}
nav        {
    /*border:solid red;*/
    display:inline-flex;
    /*flex-wrap:wrap*/
    margin-bottom:0;
    margin-top:1%;
    margin-bottom:1%;
    width:100%;
    flex-wrap:wrap;
    justify-content:space-around;
}
button       a {
    color:#fff;
}
button       {
    background-color:#555;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:x-large;
    padding:0 2% 0 2%;
  }
button:hover        {
    background-color:#777;
  }
.prro    {
  background-color: black;
color:white;
display:inline;
margin-right:10%;

  }
summary{
    display: inline;
    float:right;
}

.hiddendiv {
    display: none;
}
.testA:focus ~ #testA {
    display: block;
    position: fixed;
    z-index:1;
}
.testB:focus ~ #testB {
    display: block;
    position:fixed;
    z-index:1;
}
.img        {
    background-color:beige;
    width:80vw;
    height:50vh;
    border:solid black;
    color:red;
}
a    {
    text-decoration:none;
}
#footer{
    position:absolute;
    bottom:0;
    width:100%;
    background-color :darkcyan;
    text-align:center;
}

@keyframes changePosition {
    0% {
        position: absolute;
    }
    100% {
        position: fixed;
    }
}

/*
* Made by Erik Terwan
* 24th of November 2015
* MIT License
*
*
* If you are thinking of using this in
* production code, beware of the browser
* prefixes.
*/

#menuToggle
{
 display: inline-block;
 position:absolute;
 z-index: 1;
 -webkit-user-select: none;
 user-select: none;
 background-color: black;
 color:white;

}

#menuToggle a
{
 text-decoration: none;
 color: #232323;
 transition: color .5s ease;
}

#menuToggle a:hover
{
 color: tomato;
}

#menuToggle input
{
 display: block;
 width: 40px;
 height: 32px;
 position: absolute;
 top: -7px;
 left: -5px;
 cursor: pointer;
 opacity: 0; /* hide this */
 z-index: 2; /* and place it over the hamburger */
 -webkit-touch-callout: none;
}

/*
* Just a quick hamburger
*/
#menuToggle span
{
 display: block;
 width: 33px;
 height: 4px;
 margin-bottom: 5px;
 position: relative;
 background: #cdcdcd;
 border-radius: 3px;
 z-index: 1;
 transform-origin: 4px 0px;
 transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
             background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
             opacity 0.55s ease;
}

#menuToggle span:first-child
{
 transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
 transform-origin: 0% 100%;
}

/*
* Transform all the slices of hamburger
* into a crossmark.
*/
#menuToggle input:checked ~ span
{
 opacity: 1;
 transform: rotate(45deg) translate(-2px, -1px);
 background: #232323;
}

/*
* But let's hide the middle one.
*/
#menuToggle input:checked ~ span:nth-last-child(3)
{
 opacity: 0;
 transform: rotate(0deg) scale(0.2, 0.2);
}

/*
* Ohyeah and the last one should go the other direction
*/
#menuToggle input:checked ~ span:nth-last-child(2)
{
 transform: rotate(-45deg) translate(0, -1px);
}
/*
* Make this absolute positioned
* at the top left of the screen
*/
#menu {
    position: absolute;
    left: -200%; /* Initial position */
    width: 95vw;
    height: auto;
    margin: -100px 0 0 0;
    padding: 50px;
    padding-top: 125px;
    background: #ededed;
    list-style-type: none;
    -webkit-font-smoothing: antialiased;
    transform-origin: 0% 0%;
    transform: translate(-100%, 0);
    transition: transform 0.7s cubic-bezier(0.77, 0.2, 0.05, 1.0);
    /* Entry transition */
}

#menuToggle input:not(:checked) ~ #menu {
position: fixed;
left: -200%; /* Initial position */
width: 95vw;
height: auto;
margin: -100px 0 0 0;
padding: 50px;
padding-top: 125px;
background: #ededed;
list-style-type: none;
-webkit-font-smoothing: antialiased;
transform-origin: 0% 0%;
transform: translate(-100%, 0);
transition: transform 0.7s cubic-bezier(0.77, 0.2, 0.05, 1.0);
animation: changePosition 1.9s forwards;
/* Entry transition */

}
/*The menu does not push the page
down while inactive.*/

/* Define entry transition inside media query */
@media (min-aspect-ratio: 1/1) {
    #menu {
        position: absolute;
        display: inline;
        padding: 5vh;
        padding-top: 12vh;
        width: 65vw;
        height: auto;
        margin: -45px 0 0 calc(-7vh + 7vw);
        border: 1px solid red;
        transform-origin: 0% 0%;
        transform: translate(-100%, 0);
        transition: transform 0.7s cubic-bezier(0.77, 0.2, 0.05, 1.0);
    }

    #menuToggle input:not(:checked) ~ #menu {
        position: fixed;
        display: inline;
        padding: 5vh;
        padding-top: 12vh;
        width: 65vw;
        height: auto;
        margin: -45px 0 0 calc(-7vh + 7vw);
        border: 1px solid red;
        transform-origin: 0% 0%;
        transform: translate(-100%, 0%);
        transition: transform 0.7s cubic-bezier(0.77, 0.2, 0.05, 1.0);
        animation: changePosition 1.9s forwards;
    }        
}
/* These aspect ratios will have to make the site work, on most standard aspect ratios.
@media (min-aspect-ratio: 8/5) { 
    div {
        /* background: #9af;
         blue
    }
}

/* Maximum aspect ratio
@media (max-aspect-ratio: 3/2) {
    div {
        /* background: #9ff;
         cyan
    }
}
*/
#menu li
{
 padding: 10px 0;
}
.titleli {
    display:inline-block;
    text-align:center;
    width:100%;
    color:goldenrod
}

/*
* And let's slide it in from the left
*/
#menuToggle input:checked ~ ul
{
 transform: none;
}
</style>
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