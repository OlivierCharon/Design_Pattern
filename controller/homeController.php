<?php
    
    
    class HomeController {
    
        public function characters() {
            require_once '../model/homeModel.php';
            $characters = $getAllCharacters->PDOInstance->fetch();
            require_once '../view/home.php';
        }
        
        public function character(){
        
        }
        
        public function monsters(){
        
        }
        
        public function monster(){
        
        }
        
    }
    
    foreach($characters as $character) {
        $charactersList += new Character($character["nameChara"], $character["health"], $character["mana"], $character["nameWeapon"], $character["damageWeapon"], $character["lvl"], $character["nameJob"], $character["damage"]);
    }