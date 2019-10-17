<?php
    
    class Character {
     
     private $name = '';
     private $lvl = '';
     private $spells = []; // 1 à 10 + ace - Possiblité d'avoir 2 spells sur une carte en fonction de la couleur
    
        /**
         * Character constructor.
         * @param string $name
         * @param string $lvl
         * @param array $spells
         */
        public function __construct(string $name, string $lvl, array $spells)
        {
            $this->name = $name;
            $this->lvl = $lvl;
            $this->spells = $spells;
        }
    
//        METHODS

//    GETTERS AND SETTERS
        
        /**
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }
    
        /**
         * @param string $name
         */
        public function setName(string $name): void
        {
            $this->name = $name;
        }
    
        /**
         * @return string
         */
        public function getLvl(): string
        {
            return $this->lvl;
        }
    
        /**
         * @param string $lvl
         */
        public function setLvl(string $lvl): void
        {
            $this->lvl = $lvl;
        }
    
        /**
         * @return array
         */
        public function getSpells(): array
        {
            return $this->spells;
        }
    
        /**
         * @param array $spells
         */
        public function setSpells(array $spells): void
        {
            $this->spells = $spells;
        }

        
        
        
    } ?>