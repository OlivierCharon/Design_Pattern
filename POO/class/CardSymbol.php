<?php
    
    
    abstract class CardSymbol
    {
    
        protected $letter = '';
        protected $symbol = '';
        protected $color = '';
    
        /**
         * @return mixed
         */
        abstract function whoAmI();
    
        abstract function whatColor();
    
        /**
         * @return string
         */
        public function getLetter(): string
        {
            return $this->letter;
        }
    
        /**
         * @param string $letter
         */
        public function setLetter(string $letter): void
        {
            $this->letter = $letter;
        }
    
        /**
         * @return string
         */
        public function getSymbol(): string
        {
            return $this->symbol;
        }
    
        /**
         * @param string $symbol
         */
        public function setSymbol(string $symbol): void
        {
            $this->symbol = $symbol;
        }
    
        /**
         * @return string
         */
        public function getColor(): string
        {
            return $this->color;
        }
    
        /**
         * @param string $color
         */
        public function setColor(string $color): void
        {
            $this->color = $color;
        }
    }