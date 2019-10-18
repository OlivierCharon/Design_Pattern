
<div>
  <h3>Contre qui voulez-vous faire combattre ce héro ? </h3>
  <?php foreach ($allMonster as $value): ?>
    <div class="card mb-4 perso-style">
      <h3 class="card-title"> <?= $value["nameMonster"] ?> </h3>
      <div class="card-body">
        <p class="card-text"> <?= $value["health"] ?></p>
        <p class="card-text"> <?= $value["damage"] ?></p>

      <form method="post" action="/fight/<?= $value['idMonster'] ?>&idChara=<?= $idChara ?>">
        <button type="submit" name="monster">Combattre le monstre</button>
      </form>
    </div>
  <?php endforeach ?>  
</div>
