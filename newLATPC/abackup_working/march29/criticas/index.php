<?php
include ('../code/functions.php');
$obj = new esdirectory2();

// header
$obj->cabecera();

//here goes the page's content
//include("../code/spanish.html");
echo"<h1>Pagina de Servicio</h1>esto esta fuera del articulo, pero dentro del main";
titles();
//footer function
$obj->piecera();
?>