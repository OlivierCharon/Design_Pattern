<?php
    class Game
    {
        
        public function __construct($name, $life)
        {
            $this->name = $name;
            $this->life = $life;
        }
        
        function atk()
        {
            echo('Hello there!');
        }
        
    }