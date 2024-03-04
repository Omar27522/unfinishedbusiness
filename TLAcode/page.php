<?php
class Page          {

public $content;
public $title;
public $keywords ="TLA Consulting, Three Letter Abbreviation
                    some of mu best friends are search engines";
public $buttons =array ("Home"      => "home.php",
                        "Contact"   => "contact.php",
                        "Services"  => "services.php",
                        "Site Map"  => "map.php"
                       );


public function __set ($name, $value)
    {
        $this->$name=$value;
    }


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


public function DisplayTitle()
    {
        echo "<title>".$this->title."</title>";
    }


public function DisplayKeywords()
    {
        echo "<meta name=\"keywords\"
              content=\"".$this->keywords."\"/>";
    }


public function DisplayStyles ()
    {
?>
    <style>
    h1  {
            color:white; font-size: 24pt; text-align:center;
            font-family:arial, sans-serif
        }

    .menu {
            color:white; font-size:12pt; text-align:center;
            font-family:arial, sans-serif; font-weight:bold
        }

    td  {
            background: black
        }

    p   {
            color:black; font-size:12pt; text-align:justify;
            font-family: arial, sans-serif
        }


    p.foot {
            color:white; font-size:9pt; text-align:center;
            font-family:arial, sans-serif; font-weight:bold
        }

    a:link,a:visited, a:active {
            color:white
        }
    </style>
<?php
}


public function DisplayHeader()     {
?>
    <table width="100%" cellpadding="12" cellspacing="0" border="0">
        <tr background-color="black">
            <td align="right"><img src="logo.gif"alt="Logo"></td>
            <td>
                <h1>TLA Consulting Pty Ltd</h1>
            </td>
            <td align="right"><img src="logo.gif"alt="Logo"></td>
        </tr>
    </table>
<?php
}


public function DisplayMenu($buttons)       {
    echo "<table width=\"100%\" background-color=\"white\" cellpadding=\"4\" cellspacing =\"4\">\n";
    echo "<tr>\n";

    //calculate button size
    $width = 100/count($buttons);
        foreach ($buttons as $name => $url) {
            $this -> DisplayButton($width, $name, $url, !$this->IsURLCurrentPage($url));
        }
        echo "</tr>\n";
        echo "</table>\n";
    }


public function IsURLCurrentPage($url)
    {
        if(strpos($_SERVER['PHP_SELF'], $url ) ==false)
        {
            return false;
        }
        else
            {
        return true;
            }
}


public function DisplayButton($width, $name, $url, $active =true)   {
        if($active) {
            echo "<td width= \"".$width."%\">
                <a href=\"".$url."\">
                <img src=\"s-log.gif\" alt=\"".$name."\" border=\"0\"></a>
                <a href =\"".$url."\"><span class=\"menu\">".$name."</span></a>
                </td>";
        }
        else    {
            echo "<td width=\"".$width."%\">
            <img src=\"side-log.gif\" alt=\"".$name."_side\">
            <span class=\"menu\">".$name."</span>
            </td>";
        }
    }


public function DisplayFooter()
    {
?>
    <table width="100%" background="black" cellpadding="12" border="0">
        <tr>
            <td>
                <p class = "foot">&copy; TLA Consulting Pty Ltd.</p>
                <p class = "foot">Please see our <a href="#">legal
                information page</a></p>
    </td>
    </tr>
    </table>
<?php
    }
}

?>