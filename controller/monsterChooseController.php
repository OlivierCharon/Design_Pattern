<?php
    
    
    class fightController
    {
        public function monster() {

            require './model/monsterChooseModel.php';
            require './view/monsterChoose.php';
            
        }
    }


    fightController::monster();
    
    