<?php
class directory1    {
 function top_header()
        {
  include('./code/header1.php');
        }
    }

class directory2    {
 function top_header()    {
  include('../code/header.php');
    }
    
    function footer()    {
        require '../code/footer.php';
    }
}

class esdirectory2    {
 function cabecera()    {
  include('../code/cabecera.php');
    }
    
    function piecera()    {
        require '../code/piecera.php';
    }
}

function levels($i)    {
    $paths = ["../", "../../", "../../../"];
    return $paths[$i - 1];
    //echo levels(1); // Outputs: "../"
}

function titles() {
    // Get the current URL path
    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // Split the URL path into an array of directory names
    $directories = explode('/', rtrim($url_path, '/'));
    
    // Get the last directory name (page name)
    $page = end($directories);
    
    // Define titles based on the page name
    switch ($page) {
        case 'services':
            echo "Services";
            break;
        case 'about':
            echo "Title for About Page";
            break;
        case 'apps':
            echo "Software";
            break;
        case 'reviews':
            echo "Reviews";
            break;
        case 'service':
            echo "Service and Repair";
            break;
        case 'parts':
            echo "Hardware";
            break;
        case 'contact':
            echo "Contact";
            break;
        case 'spanish':
            echo "Español";
            break;
        case 'servicio':
            echo "Servicio";
            break;
        case 'partes':
            echo "Hardware";
            break;
        case 'software':
            echo "Apps";
            break;
        case 'servicios':
            echo "Servicios";
            break;
        case 'contacto':
            echo "Contactenos";
            break;
        case 'criticas':
            echo "Reseñas";
            break;
        default:
            echo "LATPC";
            break;
    }
}

// Call the function to output the title


?>