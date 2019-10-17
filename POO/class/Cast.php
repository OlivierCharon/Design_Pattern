<?php
    
    
    class Cast
    {
        private $cards = [];
        private $atk = 0;
        private $cannotEvade = false;
        private $ignoringDef = false;
        private $ignoreCannotEvade = false;
        private $cannotIgnoreDef = false;
        private $evadeR = false;
        private $evadeS = false;
    
        /**
         * Cast constructor.
         * @param array $cards
         * @param int $atk
         * @param bool $cannotEvade
         * @param bool $ignoringDef
         * @param bool $ignoreCannotEvade
         * @param bool $cannotIgnoreDef
         * @param bool $evadeR
         * @param bool $evadeS
         */
        public function __construct(array $cards, int $atk, bool $cannotEvade, bool $ignoringDef, bool $ignoreCannotEvade, bool $cannotIgnoreDef, bool $evadeR, bool $evadeS)
        {
            $this->cards = $cards;
            $this->atk = $atk;
            $this->cannotEvade = $cannotEvade;
            $this->ignoringDef = $ignoringDef;
            $this->ignoreCannotEvade = $ignoreCannotEvade;
            $this->cannotIgnoreDef = $cannotIgnoreDef;
            $this->evadeR = $evadeR;
            $this->evadeS = $evadeS;
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
        public function getAtk(): int
        {
            return $this->atk;
        }
    
        /**
         * @param int $atk
         */
        public function setAtk(int $atk): void
        {
            $this->atk = $atk;
        }
    
        /**
         * @return bool
         */
        public function isCannotEvade(): bool
        {
            return $this->cannotEvade;
        }
    
        /**
         * @param bool $cannotEvade
         */
        public function setCannotEvade(bool $cannotEvade): void
        {
            $this->cannotEvade = $cannotEvade;
        }
    
        /**
         * @return bool
         */
        public function isIgnoreDef(): bool
        {
            return $this->ignoreDef;
        }
    
        /**
         * @param bool $ignoringDef
         */
        public function setIgnoreDef(bool $ignoringDef): void
        {
            $this->ignoreDef = $ignoringDef;
        }
    
        /**
         * @return bool
         */
        public function isIgnoreCannotEvade(): bool
        {
            return $this->ignoreCannotEvade;
        }
    
        /**
         * @param bool $ignoreCannotEvade
         */
        public function setIgnoreCannotEvade(bool $ignoreCannotEvade): void
        {
            $this->ignoreCannotEvade = $ignoreCannotEvade;
        }
    
        /**
         * @return bool
         */
        public function isCannotIgnoreDef(): bool
        {
            return $this->cannotIgnoreDef;
        }
    
        /**
         * @param bool $cannotIgnoreDef
         */
        public function setCannotIgnoreDef(bool $cannotIgnoreDef): void
        {
            $this->cannotIgnoreDef = $cannotIgnoreDef;
        }
    
        /**
         * @return bool
         */
        public function isIgnoreR(): bool
        {
            return $this->evadeR;
        }
    
        /**
         * @param bool $evadeR
         */
        public function setIgnoreR(bool $evadeR): void
        {
            $this->evadeR = $evadeR;
        }
    
        /**
         * @return bool
         */
        public function isIgnoreS(): bool
        {
            return $this->evadeS;
        }
    
        /**
         * @param bool $evadeS
         */
        public function setIgnoreS(bool $evadeS): void
        {
            $this->evadeS = $evadeS;
        }
    
    
    }