<?php

    
    if (isset($_GET['url'])) {
        $arrayUrl = explode('/', $_GET['url']);
    }
    $idChara = $arrayUrl[1];

    $getAllMonster = SPDO::getInstance()->query("SELECT * FROM Monster");
    $getAllMonster->execute();
    $allMonster = $getAllMonster->fetchAll(PDO::FETCH_ASSOC);