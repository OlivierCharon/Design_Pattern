<?php
    require_once '../db.php';
    
    // CREATE ONE CHARACTER
    SPDO::getInstance()->query("INSERT INTO Characters (nameChara, health, mana, lvl, damage, weapon_id, job_id) VALUES('$name', $health, $mana, 1, 10, $weapon, $job)");