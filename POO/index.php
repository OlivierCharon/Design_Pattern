<?php
    require_once 'header.php';
    require_once 'db.php';
    require_once 'Autoloader.php';
    
    //    //    SYMBOLS
    //    foreach (SPDO::getInstance()->query('SELECT * FROM CardSymbol') as $symbol) {
    //        ${$symbol[name]} = new CardSymbol($symbol[symbol_letter], $symbol[name], $symbol[color]);
    //    }
    
    //    CARDS
    foreach (SPDO::getInstance()->query('SELECT * FROM Card') as $card) {
        switch ($card[symbol_id]) {
            case 1:
                ${'h' . $card[value]} = new Card('h', 'heart', 'red', $card[value]);
                break;
            case 2:
                ${'d' . $card[value]} = new Card('d', 'diamond', 'red', $card[value]);
                break;
            case 3:
                ${'s' . $card[value]} = new Card('s', 'spade', 'black', $card[value]);
                break;
            case 4:
                ${'c' . $card[value]} = new Card('c', 'club', 'black', $card[value]);
                break;
        }
    }
    
    function createCard()
    {
    
    }


?>

<main>
    
    <div class="cards-list row justify-content-center">
        <div class="col-md-6  d-flex flex-column">
            <form action='functions/createCard.php' class="d-flex flex-column" method="post">
                <h2>Choisissez une couleur pour votre carte:</h2>
                <div>
                    <input type="radio" name="colorCard" value="h">
                    <label for="colorCard">Coeur</label>
                </div>
                <div>
                    <input type="radio" name="colorCard" value="d">
                    <label for="colorCard">Carreaux</label>
                </div>
                
                <div>
                    <input type="radio" name="colorCard" value="s">
                    <label for="colorCard">Pique</label>
                </div>
                
                <div>
                    <input type="radio" name="colorCard" value="c">
                    <label for="colorCard">Trefle</label>
                </div>
                <div>
                    <label for="valueCard">Choisissez une valeur pour votre carte</label>
                    <input type="text" name="valueCard" placeholder="Valeur...">
                </div>
                
                <input type="submit">
            
            
            </form>
            <?php
                var_dump($_POST[valueCard]);
                echo '<span>' . $h14->whoAmI() . '</span>';
                echo '<span>' . $d7->whatColor() . '</span>';
            ?>
        </div>
    </div>
    <div class="cards-list row justify-content-center">
        
        <?php
            foreach (SPDO::getInstance()->query('SELECT S.name AS symbol, S.symbol_letter AS symbol_letter, C.value AS value FROM Card C LEFT JOIN CardSymbol S ON C.symbol_id = S.id') as $card) {
                echo '<div class=\'col-md-2 ' . $card[symbol] . '-card\'>
                                <img class=\'card-img\' src=\'content/cards/' . $card[symbol_letter] . $card[value] . '.png\' alt=\'Heart Card\'>
                                <p>' . $card[value] . ' of ' . $card[symbol] . '</p>
                                <button class="btn">Supprimer</button>
                            </div>';
            }
        ?>
    
    </div>
 

</main>

<?php include 'footer.php' ?>
