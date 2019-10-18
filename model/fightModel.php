<?php

spl_autoload_register(function ($class) {
    include './classes/' . $class . '.php';
});

if (isset($_GET['url'])) {
    $arrayUrl = explode('/', $_GET['url']);
}

$idMonster = $arrayUrl[1];

$idChara = str_replace("'","",$_GET['idChara']);


$getCharacters = SPDO::getInstance()->query("SELECT * FROM Characters JOIN Weapon ON Characters.weapon_id = Weapon.idWeapon JOIN Job ON Characters.job_id = Job.idJob WHERE idChara = $idChara ");
$getMonster = SPDO::getInstance()->query("SELECT * FROM Monster WHERE idMonster = $idMonster ");

// $getCharacters->execute();
// $getMonster->execute();

$characterFighting = $getCharacters->fetch(PDO::FETCH_ASSOC);
$monsterFighting = $getMonster->fetch(PDO::FETCH_ASSOC);

$firstCharacter = new Character($characterFighting["nameChara"], $characterFighting["health"], $characterFighting["mana"], $characterFighting["nameWeapon"], $characterFighting["damageWeapon"], $characterFighting["lvl"], $characterFighting["nameJob"], $characterFighting["damage"]);
$evilVilain = new Monster($monsterFighting["nameMonster"], $monsterFighting["health"], $monsterFighting["damage"]);
