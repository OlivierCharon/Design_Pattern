<?php
    require 'db/db.php';
    $url = '';
    if (isset($_GET['url'])) {
        $url = explode('/', $_GET['url']);
    }
    require_once 'layout/header.php';
    if (isset($url[0])) {
        
        switch ($url[0]) {
            // Vue principal
            case 'homeController':
                require 'controller/homeController.php';
                break;
            // Creation de personnage
            case 'characterCreateController':
                require 'controller/characterCreateController.php';
                break;
            // Modification de personnage
            case 'characterUpdateController':
                require 'controller/characterUpdateController.php';
                break;
            // Choix du Monstre à combattre
            case 'monsterChooseController':
                require 'controller/monsterChooseController.php';
                break;
            // Combat 
            case 'fight':
                require 'controller/fightController.php';
                break;
            default:
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                require 'layout/404.php';
                exit;
            
        }
    } else {
        require 'controller/homeController.php';
    }
    require_once 'layout/footer.php';