<?php
    
    
    class Card extends CardSymbol
    {
     
        private $value = '';
    
        /**
         * Card constructor.
         * @param string $symbol
         * @param string $value
         */
        public function __construct(string $letter, string $symbol, string $color, string $value)
        {
            $this->letter = $letter;
            $this->symbol = $symbol;
            $this->color = $color;
            $this->value = $value;
        }
        
        public function whoAmI()
        {
            return 'I am a '.$this->symbol;
        }
    
        public function whatColor()
        {
            return 'I\'m a '.$this->color.' card!';
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
        public function getValue(): string
        {
            return $this->value;
        }
    
        /**
         * @param string $value
         */
        public function setValue(string $value): void
        {
            $this->value = $value;
        }
    
    
    }
    
  
    