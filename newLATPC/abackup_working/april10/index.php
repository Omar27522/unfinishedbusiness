<?php
include_once('./code/functions.php');
$obj = new directory1();
    $page = new page_content();
include ('./code/html_structure/page.php');
class page_content    {
    
        function content ()    {
            echo '<section>';
            include
            ('./info.txt');
            echo '</section>';
        }
           
}
?>