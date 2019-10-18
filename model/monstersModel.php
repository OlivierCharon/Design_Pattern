<?php
    require_once '../db.php';
    
    // GET ALL THE CHARACTERS
    $getAllChar = SPDO::getInstance()->query("SELECT * FROM Monsters");
 
