<?php
require ("page.php");

class Map extends Page
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

  $map =new Map();

  $map -> content = "
  <h2>HOME</h2>
  <h2>Contact</h2>
  <h2>Site Map</h2>
  <h2>Services</h2>
  <h2>Re-Engineering</h2>
  <h2>Standards Compliance</h2>
  <h2>Buzzword Compliance</h2>
  <h2>Mission Statement</h2>
  <h2>LEGAL</h2>";

$map-> Display();
?>