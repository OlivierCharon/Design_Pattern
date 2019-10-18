<?php
    require_once '../db.php';
    

    $idChara = $_POST['idChara'];
    
    // GET ALL THE CHARACTERS
    $getAllChar = SPDO::getInstance()->query("SELECT * FROM Characters JOIN Job ON Characters.job_id = Job.idJob JOIN Weapon ON Characters.weapon_id = Weapon.idWeapon WHERE idChara=$idChara");
