<?php
/*class Directory {
    private $isSubdirectory;
    private $lang = "lang=\"en-US\"";
    private $c_ss = "./code/style.css";
    private $c_ss2 = "./code/terwanpop.css";
    private $crumbs = '<a href="./service/">Service</a>&nbsp;<a href="./parts/">Parts</a>&nbsp;<a href="./apps/">Software</a>';
    private $logo = '<small>PC is for Personal Computer</small>';
    private $nav_menu = '<li class="titleli">Our Lord and Savior Jesus Christ</li><a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html" target="_blank"><li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb10.webp"width="100%"height= "auto"></li></a><a href="#"><li>Heavenly Father Tell me about the Web</li></a><a href="#"><li>Our Lord and Savior Jesus Christ</li></a><a href="#"><li>Info</li></a><a href="#"><li>Contact</li></a><a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>';
    private $nav_buttons = '<button><a href="./">Home</a></button><button><a href="./spanish/">Español</a></button><button><a href="./services/">Services</a></button><button><a href="./contact/">Contact&nbsp;Us</a></button><button><a href="./reviews/">Reviews</a></button>';
    private $footer = 'Site\'s footer';

    function __construct($isSubdirectory = false) {
        $this->isSubdirectory = $isSubdirectory;
    }
    function __construct($is3rd_directory = false) {
        $this->is3rd_directory = $is3rd_directory;
    }

    public function getLang() {
        return $this->lang;
    }

    public function getCss() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return "\"".$path.$this->c_ss."\"";
    }

    public function getCss2() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return "\"".$path.$this->c_ss2."\"";
    }

    public function getCrumbs() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return '<a href="'.$path.'service/">Service</a>&nbsp;<a href="'.$path.'parts/">Parts</a>&nbsp;<a href="'.$path.'apps/">Software</a>';
    }

    public function getLogo() {
        return $this->logo;
    }

    public function getNavMenu() {
        return $this->nav_menu;
    }

    public function getNavButtons() {
        $path = ($this->isSubdirectory) ? "../" : "./";
        return '<button><a href="'.$path.'">Home</a></button><button><a href="'.$path.'spanish/">Español</a></button><button><a href="'.$path.'services/">Services</a></button><button><a href="'.$path.'contact/">Contact&nbsp;Us</a></button><button><a href="'.$path.'reviews/">Reviews</a></button>';
    }

    public function getFooter() {
        return $this->footer;
    }
}
// For files in the root directory
$dir = new Directory(false);
echo $dir->getLang(); // Output: lang="en-US"
echo $dir->getCss(); // Output: "./code/style.css"
echo $dir->getNavButtons(); // Output: <button><a href="./">Home</a></button>...

// For files in subdirectories
$dir = new Directory(true);
echo $dir->getCss(); // Output: "../code/style.css"
echo $dir->getNavButtons(); // Output: <button><a href="../">Home</a></button>...
*/
#we can add an extra directory, asking the ternary operator to decide between ./ ../ ../../
public function getCss() {
    $path = ($this->isSubdirectory) ? "../" : (($this->is3rd_directory) ? "../../" : "./");
    return "\"".$path.$this->c_ss."\"";
}
?>
Let's break it down:

$path = ($this->isSubdirectory) ? "../" : (($this->is3rddirectory) ? "../../" : "./");
This line uses a nested ternary operator to assign a value to the $path variable.
The first condition $this->isSubdirectory checks if the file is in a subdirectory (one level down).
If true, $path is assigned the value "../"
If $this->isSubdirectory is false, it evaluates the next ternary operator ($this->is3rddirectory) ? "../../" : "./".
This ternary operator checks the value of $this->is3rddirectory.
If $this->is3rddirectory is true, $path is assigned the value "../../" (two levels up).
If $this->is3rddirectory is false, $path is assigned the value "./" (current directory).
return "\"".$path.$this->c_ss."\"";
This line remains the same as before, constructing and returning the string that represents the path to the CSS file, using the value of $path determined in the previous step.
So, with this modification, the getCss() method will return:

"../code/style.css" if $this->isSubdirectory is true
"../../code/style.css" if $this->is3rddirectory is true
"./code/style.css" if both $this->isSubdirectory and $this->is3rddirectory are false
Note that you'll need to introduce a new property $is3rddirectory in your Directory class and set its value appropriately in the constructor or elsewhere, depending on your needs.