<div class="container">
    <h1 class="title">Personnage</h1>
    <div class="row">
        <div class="element-perso">
            <?php foreach ($characters as $character): ?>
            <div class="card mb-4 perso-style">
                <h3 class="card-title"> <?= $character['nameChara'] ?> </h3>
                <div class="card-body">
                    <p class="card-text">HP: <?= $character['health'] ?> </p>
                    <p class="card-text">MP: <?= $character['mana'] ?> </p>
                    <p class="card-text">Niveau : <?= $character['lvl'] ?> </p>
                    <p class="card-text">Job : <?= $character['nameJob'] ?> </p>
                    <p class="card-text">Arme : <?= $character['nameWeapon'] ?> </p>
                    <a href="characterUpdate.php?idChara=<?= $character['idChara'] ?>" class="btn btn-primary">Modifier</a>
                    <a href="fight.php?idChara=<?= $character['idChara'] ?>" class="btn btn-success">Combattre</a>
                </div>
            </div>
                <?php endforeach ?>
            
        </div>
        <div>
            <a href="/characterCreateController">Recruter un héro !<a>
        
        </div>
    
    </div>
</div>
