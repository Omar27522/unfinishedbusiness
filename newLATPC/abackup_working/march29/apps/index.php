<?php
//class to do this job
include ('../code/functions.php');
$obj = new directory2();

// header
$obj->top_header();


//here goes the page's content
echo"".titles()." Page"."<h2>Software</h2>";





//footer
$obj->footer();
?>