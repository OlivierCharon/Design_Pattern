<?php
    
    require './db.php';
    
    $getAllWeapon = SPDO::getInstance()->query("SELECT idWeapon, nameWeapon FROM Weapon");
    $getAllWeapon->execute();
    $donneesWeapon = $getAllWeapon->fetchAll(PDO::FETCH_ASSOC);
    
    $getAllJob = SPDO::getInstance()->query("SELECT idJob, nameJob FROM Job");
    $getAllJob->execute();
    $donneesJob = $getAllJob->fetchAll(PDO::FETCH_ASSOC);
    
    
    // CREATE ONE CHARACTER
    // var_dump($donneesJob);
    if (isset($_POST) && !empty($_POST)) {
        $name = $_POST['name'];
        $health = $_POST['health'];
        $mana = $_POST['mana'];
        $job = $_POST['job'];
        $weapon = $_POST['weapon'];
        SPDO::getInstance()->query("INSERT INTO Characters (nameChara, health, mana, lvl, damage, weapon_id, job_id) VALUES('$name', $health, $mana, 1, 10, $weapon, $job)");
        header('Location: ./');
    }
