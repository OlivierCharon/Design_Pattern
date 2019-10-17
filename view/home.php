
<div class="container">
    <h1 class="my-4 title">Personnage</h1>
    <div class="row">
        <div class="element-perso">
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
            <?php endforeach ?>
        </div>
    </div>
    <div>
        <a href="/characterCreateController">Recruter un héro !<a>
    </div>

</div>
