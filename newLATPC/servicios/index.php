<?php
include_once('../code/functions.php');
$obj = new es_directory2();
    $page = new page_content();
include ('../code/html_structure/page.php');
class page_content    {
    public $a;
        function __construct (){
            $this->a='<h1>Yay! Algun contenido.
            </h1>'. titles().titles().titles().titles();
        }
}
titles();
echo " ESTA AFUERA DEL ARTICLE ";
?>