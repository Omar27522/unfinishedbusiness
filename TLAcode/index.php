<?php
require ("page.php");

$homepage = new page();
$homepage->title="Welcome";
$homepage->content = "<p>Welcome to the home of TLA Consulting.
                        Please take some time to het to know us.</p>
                      <p>We specialize in serving your business needs
                        and hope to hear from you soon.</p>";


$homepage->Display();
?>