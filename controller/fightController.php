<?php
    spl_autoload_register(function ($class) {
        include './classes/' . $class . '.php';
    });
    
    class fightController
    {
        public function fight() {

            require './model/fightModel.php';
            require './view/fight.php';
            
        }
    }

    
    fightController::fight();
    
    