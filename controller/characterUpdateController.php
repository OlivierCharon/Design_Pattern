<?php
    
    
    class characterUpdateController
    {
        public function characterUpdate() {

            require './model/characterUpdateModel.php';
            require './view/characterUpdate.php';
            
        }
    }


    characterUpdateController::characterUpdate();
    
    