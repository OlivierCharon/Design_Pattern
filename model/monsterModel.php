<?php
    require_once '../db.php';
    
    $idChara = $_GET['idMonster'];
    
    // GET ONE MONSTER
    $idMonster = $_POST['idMonster'];
    $getAllChar = SPDO::getInstance()->query("SELECT * FROM Monsters WHERE idMonster = $idMonster");
