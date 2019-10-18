<?php
    require './db.php';
    
    // GET ALL THE CHARACTERS
    $getAllCharacters = SPDO::getInstance()->query("SELECT * FROM Characters JOIN Job ON Characters.job_id = Job.idJob JOIN Weapon ON Characters.weapon_id = Weapon.idWeapon");
    $getAllCharacters->execute();
    $characters = $getAllCharacters->fetchAll(PDO::FETCH_ASSOC);

    
    // DELETE ONE CHARACTER
    // $idChara = $_POST['idChara'];
    // SPDO::getInstance()->query("DELETE FROM Characters WHERE idChara = $idChara ");
    
    // GET ALL THE MONSTERS
    $getAllCharacters = SPDO::getInstance()->query("SELECT * FROM Monsters");
    
    // DELETE ONE MONSTER
    // $idMonster = $_POST['idMonster'];
    // SPDO::getInstance()->query("DELETE FROM Monsters WHERE idMonster = $idMonster ");
