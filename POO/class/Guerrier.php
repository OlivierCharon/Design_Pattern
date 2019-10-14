<?php
    
    
    class Guerrier extends Character2
    {
        private $resistance = 0;
    
        /**
         * Guerrier constructor.
         * @param int $resistance
         */
     
            public function __construct(string $name, int $health, int $mana, string $weapon, int $atk, int $resistance)
        {
            parent::__construct($name,$health,$mana,$weapon,$atk);
            $this->resistance = $resistance;
        }
    
        /**
         * @return int
         */
        public function getResistance(): int
        {
            return $this->resistance;
        }
    
        /**
         * @param int $resistance
         */
        public function setResistance(int $resistance): void
        {
            $this->resistance = $resistance;
        }
        
        
    
    
    }