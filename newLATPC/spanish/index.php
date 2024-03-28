<?php
include ('../code/functions.php');
$obj = new directory2();

// header
$obj->top_header();

//here goes the page's content
include("../code/spanish.html");
echo"esto esta fuera del articulo, pero dentro del main";

titles();
//footer function
$obj->footer();
?>