<?php
include ('../code/functions.php');
$obj = new esdirectory2();

// header
$obj->cabecera();

//here goes the page's content
include("../code/spanish.html");
echo"esto esta fuera del articulo, pero dentro del main";
titles();
//footer function
$obj->piecera();
?>