<<<<<<< HEAD
=======
<?php
    spl_autoload_register(function ($class) {
        include 'classes/' . $class . '.php';
    });

?>
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6

<div class="container">
    <h1 class="my-4 title">Personnage</h1>
    <div class="row">
        <div class="element-perso">
<<<<<<< HEAD
            <?php foreach ($donnees as $personnage): ?>
                 <div class="card mb-4 perso-style">
                    <h3 class="card-title"> <?= $personnage['nameChara'] ?> </h3>
                    <div class="card-body">
                        <p class="card-text">HP:  <?= $personnage['health'] ?> </p>
                        <p class="card-text">MP: <?= $personnage['mana'] ?> </p>
                        <p class="card-text">Niveau : <?= $personnage['lvl'] ?> </p>
                        <p class="card-text">Job : <?= $personnage['nameJob'] ?> </p>
                        <p class="card-text">Arme : <?= $personnage['nameWeapon'] ?> </p>
                        <a href="characterUpdate.php?idChara=<?= $value['idChara'] ?>" class="btn btn-primary">Modifier</a>
                        <a href="fight.php?idChara=<?= $value['idChara'] ?>" class="btn btn-success">Combattre</a>
                    </div>
                </div> 
=======
            <?php foreach ($donnees as $key => $value): ?>
                <?php  ?>
                <div class="card mb-4 perso-style">
                    <h3 class="card-title"> <?= $personnage->getName() ?> </h3>
                    <div class="card-body">
                        <p class="card-text"> <?= $personnage->getHealth() ?> </p>
                        <p class="card-text"> <?= $personnage->getMana() ?> </p>
                        <p class="card-text"> <?= $personnage->getWeapon() ?> </p>
                        <p class="card-text"> <?= $personnage->getlvl() ?> </p>
                        <p class="card-text"> <?= $personnage->getJob() ?> </p>
                        <a href="characterUpdate.php?idChara=<?= $value['idChara'] ?>" class="btn btn-primary">Modifier</a>
                        <a href="fight.php?idChara=<?= $value['idChara'] ?>" class="btn btn-success">Combattre</a>
                    </div>
                </div>
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
            <?php endforeach ?>
        </div>
    </div>
    <div>
<<<<<<< HEAD
        <a href="/characterCreateController">Recruter un héro !<a>
=======
        <a href="characterCreate.php">Recruter un héro !<a>
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
    </div>

</div>
