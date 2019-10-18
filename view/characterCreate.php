<<<<<<< HEAD

=======
<?php
// require_once("./sqlRequete/db.php");

include('./header.php');
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});


$dbhost = "localhost";
$dbname = "pooCharacters";
$dbusername = "root";
$dbpassword = "0000";

$link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);;
        
$sql1 = $link->prepare("SELECT idWeapon, nameWeapon FROM Weapon");
$sql1->execute();
$donnees1 = $sql1->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $link->prepare("SELECT idJob, nameJob FROM Job");
$sql2->execute();
$donnees2 = $sql2->fetchAll(PDO::FETCH_ASSOC);
?>
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6

<div class="form">
  <!-- Page Content -->
  <div class="container ajouter_style">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="addCss">
<<<<<<< HEAD
        <form action="characterCreateController" method="POST" enctype="multipart/form-data">
=======
        <form action="sqlRequete/add.php" method="POST" enctype="multipart/form-data">
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
          <fieldset>
            <legend>Création  d'un Héro</legend>
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="health">Nombre de point de vie</label>
              <input type="number" name="health" class="form-control" id="health" required>
            </div>
            <div class="form-group">
              <label for="mana">Nombre de point de mana</label>
              <input type="number" name="mana" class="form-control" id="mana" required>
            </div>
            <div class="form-group">
              <label for="weapon">choix d'une arme</label>
              <select name="weapon">
<<<<<<< HEAD
                <?php foreach ($donneesWeapon as $value): ?>
=======
                <?php foreach ($donnees1 as $key => $value): ?>
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
                    <option value="<?= $value['idWeapon'] ?>"> <?= $value['nameWeapon'] ?> </option>";
                <?php endforeach?>
                </select>
            </div>
            <div class="form-group">
              <label for="job">choix d'un job</label>
              <select name="job">
<<<<<<< HEAD
              <?php foreach ($donneesJob as $value): ?>
                    <p><?: $donneesJob ?> </p>
=======
              <?php foreach ($donnees2 as $key => $value): ?>
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
                    <option value="<?= $value['idJob'] ?>"> <?= $value['nameJob'] ?> </option>";
                <?php endforeach?>
                </select>
            </div>
          </fieldset>
          <button type="submit" class="btn btn-primary">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<<<<<<< HEAD
=======


<!-- /.container -->
<?php include('./footer.php') ?>
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
