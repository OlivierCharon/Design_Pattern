<?php
    
    class HomeController
    {
        
        public function characters()
        {
            require './model/homeModel.php';
            require './view/home.php';
        }
        
        
    }
    
    HomeController::characters();