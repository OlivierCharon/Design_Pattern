
<h3>Attention, vous ne pouvez changer que le nom du personnage ! Le reste des caractéristiques est prédéfini </h3>
                    
<div class="form">
    <!-- Page Content -->
    <div class="container ajouter_style">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="addCss">
                <form action="<?= $oneCharacter['idChara'] ?>" method="POST" enctype="multipart/form-data"
                class="style-form">
                    <label>Nom du personnage : </label>
                    <input type="text" name="name" id="name" value="<?= $oneCharacter['nameChara'] ?>" required>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </div>
</div>