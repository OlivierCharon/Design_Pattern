<?php 
    if (isset($_GET['url'])) {
        $arrayUrl = explode('/', $_GET['url']);
    }
    $idChara = $arrayUrl[1];
    $getOneChar = SPDO::getInstance()->query("SELECT * FROM Characters WHERE idChara='$idChara'");
    
    $getOneChar->execute();
    $oneCharacter = $getOneChar->fetch(PDO::FETCH_ASSOC);


    if (isset($_POST) && !empty($_POST)) {
        $name = $_POST['name'];
        SPDO::getInstance()->query("UPDATE Characters SET nameChara = '$name' WHERE idChara = '$idChara'");
        header('Location: ../');
    }
