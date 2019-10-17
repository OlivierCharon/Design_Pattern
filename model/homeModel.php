<?php
    require_once '../db.php';
    
    // GET ALL THE CHARACTERS
    $getAllChar = SPDO::getInstance()->query("SELECT * FROM Characters JOIN Job ON Characters.job_id = Job.idJob JOIN Weapon ON Characters.weapon_id = Weapon.idWeapon");
    $getAllChar = SPDO::FetchAsso();
    print $getAllChar;
    
    // DELETE ONE CHARACTER
    $idChara = $_POST['idChara'];
    SPDO::getInstance()->query("DELETE FROM Characters WHERE idChara = $idChara ");
    
    // GET ALL THE MONSTERS
    $getAllChar = SPDO::getInstance()->query("SELECT * FROM Monsters");
    
    // DELETE ONE MONSTER
    $idMonster = $_POST['idMonster'];
    SPDO::getInstance()->query("DELETE FROM Monsters WHERE idMonster = $idMonster ");
