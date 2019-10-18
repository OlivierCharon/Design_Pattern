<<<<<<< HEAD
<div class="row">
    <div class="col-md-12">
        <h1 class="title">Choisissez votre personnage <br> ou <a href="/characterCreateController">créez en un</a></h1>
    </div>
</div>

<div class="row" id="character-selected">
    <div class="col-md-10" id="preview">
        <img src="../content/<?= $characters[0]['icon'] ?>" alt="">
    </div>
    <div class="col-md-2" id="action-buttons">
        <div class="row">
            <a href="characterUpdate.php?idChara=<?= $characters[0]['idChara'] ?>"
               class="col-md-12 btn btn-primary">Modifier</a>
=======
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
                    <a href="/characterUpdateController/<?= $character['idChara'] ?>" class="btn btn-primary">Modifier</a>
                    <a href="/monsterChooseController/<?= $character['idChara'] ?>" class="btn btn-success">Combattre</a>
                </div>
            </div>
                <?php endforeach ?>
            
>>>>>>> 2b599674e3b327786997334e8acd66578965c4af
        </div>
        <div class="row">
            <a href="fight.php?idChara=<?= $characters[0]['idChara'] ?>"
               class="col-md-12 btn btn-success">Combattre</a>
        </div>
    </div>
</div>

<div class="element-perso row">
    <?php foreach ($characters as $character): ?>
        <div class="card mb-4 perso-style" id="<?= $character['idChara'] ?>">
            <div class="card_image">
                <img src="../content/<?= $character['icon'] ?>"/>
            </div>
            
            <div class="overlay">
                <div>
                    <h3>
                        <?= $character['nameChara'] ?>
                    </h3>
                    <div class="card-body">
                        <p class="card-text">HP: <?= $character['health'] ?> </p>
                        <p class="card-text">MP: <?= $character['mana'] ?> </p>
                        <p class="card-text">Niveau : <?= $character['lvl'] ?> </p>
                        <p class="card-text">Job : <?= $character['nameJob'] ?> </p>
                        <p class="card-text">Arme : <?= $character['nameWeapon'] ?> </p>
                    </div>
                
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
