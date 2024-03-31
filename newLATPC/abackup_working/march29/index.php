<?php
include ('./code/functions.php');
$obj = new directory1();

// header
$obj->top_header();

//here goes the page's content
include ('./code/index.html');
//echo"This is outside article, but inside main.";
echo' TEST code?';
?><?php

//footer
include ('./code/footer.php');

?>