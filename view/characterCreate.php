

<div class="form">
  <!-- Page Content -->
  <div class="container ajouter_style">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="addCss">
        <form action="characterCreateController" method="POST" enctype="multipart/form-data">
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
                <?php foreach ($donneesWeapon as $value): ?>
                    <option value="<?= $value['idWeapon'] ?>"> <?= $value['nameWeapon'] ?> </option>";
                <?php endforeach?>
                </select>
            </div>
            <div class="form-group">
              <label for="job">choix d'un job</label>
              <select name="job">
              <?php foreach ($donneesJob as $value): ?>
                    <p><?: $donneesJob ?> </p>
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
