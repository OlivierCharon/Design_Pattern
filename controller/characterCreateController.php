<?php
    
    
    class characterCreateController
    {
        public function characterCreate() {

            require './model/characterCreateModel.php';
            require './view/characterCreate.php';
            
        }
    }


    characterCreateController::characterCreate();

    