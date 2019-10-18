$(document).ready(function () {
    $('.perso-style').click(function () {
        $('#character-selected div').remove();
        var charImg = $(this).find('img');
        var idChara = $(this).attr('id');
        $('#character-selected').append(`
            <div class='col-md-10' id='preview'>`+
            charImg
            +`</div>
            <div class='col-md-2' id='action-buttons'>
            <div class='row'>
            <a href='characterUpdate.php?idChara=`.idChara.`'
    class='col-md-12 btn btn-primary'>Modifier</a>
            </div>
            <div class='row'>
            <a href='fight.php?idChara=\`.idChara.\`'
    class='col-md-12 btn btn-success'>Combattre</a>
            </div>
            </div>
            `);
    });


});