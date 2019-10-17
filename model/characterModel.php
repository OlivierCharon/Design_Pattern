<?php
    require_once '../db.php';
    
<<<<<<< HEAD
    // $idChara = $_POST['idChara'];
=======
    $idChara = $_POST['idChara'];
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
    
    // GET ALL THE CHARACTERS
    $getAllChar = SPDO::getInstance()->query("SELECT * FROM Characters JOIN Job ON Characters.job_id = Job.idJob JOIN Weapon ON Characters.weapon_id = Weapon.idWeapon WHERE idChara=$idChara");
