<?php
    
    require './db.php';
    
    $getAllWeapon = SPDO::getInstance()->query("SELECT idWeapon, nameWeapon FROM Weapon");
    $getAllWeapon->execute();
    $donneesWeapon = $getAllWeapon->fetchAll(PDO::FETCH_ASSOC);
    
    if (isset($_POST) && !empty($_POST)) {
        
        $name = $_POST['name'];
        $health = $_POST['health'];
        $mana = $_POST['mana'];
        $job = $_POST['job'];
        $weapon = $_POST['weapon'];
        SPDO::getInstance()->query("INSERT INTO Characters (nameChara, health, mana, lvl, damage, weapon_id, job_id) VALUES('$name', $health, $mana, 1, 10, $weapon, $job)");
        
        header('Location: ./');
    }