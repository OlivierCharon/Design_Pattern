<?php
    
    $url = '';
    if (isset($_GET['url'])) {
        $url = explode('/', $_GET['url']);
    }
    require_once 'header.php';
    if (isset($url[0])) {
        switch ($url[0]) {
            case 'homeController':
                require 'controller/homeController.php';
                break;
            // Creation d'utilisateur
            case 'characterCreateController':
                require 'controller/characterCreateController.php';
                break;
            
            default:
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                require '404.php';
                exit;
            
        }
    } else {
        require 'controller/homeController.php';
    }
    require_once 'footer.php';