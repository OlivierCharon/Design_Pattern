<<<<<<< HEAD
<?php
    var_dump($_GET);
    
    $url = '';
    if(isset($_GET['url'])) {
        $url = explode('/', $_GET['url']);
    }
    
    var_dump($url);
    
    if($url == '') {
        require 'controller/homeController.php';
    } elseif($url[0] == 'article' AND !empty($url[1])) {
        $idChara = $url[1];
        require 'controller/characterController.php';
    } else {
        require '404.php';
    }