<<<<<<< HEAD
 
<?php
    // var_dump($_GET);
=======
<<<<<<< HEAD
<?php
    var_dump($_GET);
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
    
    $url = '';
    if(isset($_GET['url'])) {
        $url = explode('/', $_GET['url']);
    }
    
<<<<<<< HEAD
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
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
            require '404.php';
            exit;
        
        } 
    } else {
        require 'controller/homeController.php';
    }

    ?>
    
=======
    var_dump($url);
    
    if($url == '') {
        require 'controller/homeController.php';
    } elseif($url[0] == 'article' AND !empty($url[1])) {
        $idChara = $url[1];
        require 'controller/characterController.php';
    } else {
        require '404.php';
    }
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
