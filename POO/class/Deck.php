<?php
    require_once 'class/Card.php';
    
    class Deck
    {
        
       private $cards = [];
       private $nbCards = 0;
    
        /**
         * Deck constructor.
         * @param array $cards
         * @param int $nbCards
         */
        public function __construct(Array $cards, int $nbCards)
        {
            $this->cards = $cards;
            $this->nbCards = $nbCards;
        }
    
        /**
         * @return array
         */
        public function getCards(): array
        {
            return $this->cards;
        }
    
        /**
         * @param array $cards
         */
        public function setCards(array $cards): void
        {
            $this->cards = $cards;
        }
    
        /**
         * @return int
         */
        public function getNbCards(): int
        {
            return $this->nbCards;
        }
    
        /**
         * @param int $nbCards
         */
        public function setNbCards(int $nbCards): void
        {
            $this->nbCards = $nbCards;
        }
    
      
    
    
    }