<?php
    
    
    class HomeController {
    
        public function characters() {
<<<<<<< HEAD

            require './model/homeModel.php';
            
            require './view/home.php';
            
=======
            require_once '../model/homeModel.php';
            $characters = $getAllCharacters->PDOInstance->fetch();
            require_once '../view/home.php';
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
        }
        
        public function character(){
        
        }
        
        public function monsters(){
        
        }
        
        public function monster(){
        
        }
        
<<<<<<< HEAD
        
    }

    HomeController::characters();
    
=======
    }
    
    foreach($characters as $character) {
        $charactersList += new Character($character["nameChara"], $character["health"], $character["mana"], $character["nameWeapon"], $character["damageWeapon"], $character["lvl"], $character["nameJob"], $character["damage"]);
    }
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
