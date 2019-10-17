<?php
    
    
    class HomeController {
    
        public function characters() {

            require './model/homeModel.php';
            
            require './view/home.php';
            
        }
        
        public function character(){
        
        }
        
        public function monsters(){
        
        }
        
        public function monster(){
        
        }
        
        
    }

    HomeController::characters();
    