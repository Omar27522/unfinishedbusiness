<?php
include_once('../code/functions.php');
$obj = new directory2();
    $page = new page_content();
include ('../code/html_structure/page.php');
class page_content    {
    function content ()    {
        echo '<section>';
        echo 'Contact';
        echo '</section>';
    }
}
titles();
echo " IS OUTSIDE THE ARTICLE ";
?>