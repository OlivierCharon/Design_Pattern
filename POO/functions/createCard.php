<?php
    require_once '../db.php';
    
//    PAR MANQUE DE TEMPS
    $host = 'localhost';
    $db   = 'BP';
    $user = 'root';
    $pass = '0000';
    $charset = 'utf8mb4';
    

        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
      
    ///////////////////////
    
    
    $stmt = 'INSERT INTO Card(symbol_id, value) VALUES ((SELECT id FROM CardSymbol WHERE symbol_letter = \'c\'), 99))';
    $stmt = $conn->prepare($stmt);
    $stmt->execute();
   
    header('Location: ../index.php');
    
//    query('INSERT INTO Card(symbol_id, value) VALUES ((SELECT id FROM CardSymbol WHERE symbol_letter = \'c\'), 99))');