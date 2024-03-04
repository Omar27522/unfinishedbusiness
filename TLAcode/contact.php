<?php
require ("page.php");

class Contact extends Page
{
  /*private $row2buttons = array("Re-engineering"       => "reEngineering.php",
                                "Standards Compliance" => "standards.php",
                                "Buzzword Compliance"  => "buzzword.php",
                                "Mission Statements"   => "mission.php"
                                );*/

  public function Display()
    {
        echo "<html>\n<head>\n";
        $this->DisplayTitle();
        $this->DisplayKeywords();
        $this->DisplayStyles();
        echo "</head>\n<body>\n";
        $this->DisplayHeader();
        $this->DisplayMenu($this->buttons);

        echo $this->content;
        $this->DisplayFooter();
        echo "</body>\n</html>\n";
    }
}

  $contact =new Contact();

  $contact -> content = "
  <h2>Let's Connect!</h2>
  <p>
  Your business deserves expert guidance.<br />
  At TLA Consulting, we specialize in tailoring solutions to your unique needs.
  We'd love to hear from you and discuss how we can help you achieve your goals.
  </p>
  <h3>Connect with us today!</h3>
  <p>
  Call us: [Phone number]<br />
  Email us: [Email address]<br />
  Visit us: [Address]<hr>
  We look forward to speaking with you!
  </p>";

$contact-> Display();
?>