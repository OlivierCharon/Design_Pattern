<?php
    // GET ALL THE CHARACTERS
    $getAllCharacters = SPDO::getInstance()->query("SELECT * FROM Characters JOIN Job ON Characters.job_id = Job.idJob JOIN Weapon ON Characters.weapon_id = Weapon.idWeapon");
    $getAllCharacters->execute();
    $characters = $getAllCharacters->fetchAll(PDO::FETCH_ASSOC);

    
