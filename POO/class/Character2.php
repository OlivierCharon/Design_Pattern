<?php
    
    /**
     * Class Character
     */
    class Character2
    {

//        Attributs
        /**
         * @var string
         */
        protected $name = '';
        /**
         * @var int
         */
        protected $health = 0;
        /**
         * @var int
         */
        protected $mana = 0;
        /**
         * @var string
         */
        protected $weapon = '';
        
        protected $atk = 0;
        
        const LOW_HEALTH = 100;
        const MEDIUM_HEALTH = 200;
        const HIGH_HEALTH = 300;
        
        
        /**
         * Character constructor.
         * @param string $name
         * @param int $health
         * @param int $mana
         * @param string $weapon
         */
        public function __construct(string $name, int $health, int $mana, string $weapon, int $atk)
        {
            $this->name = $name;
            $this->health = $health;
            $this->mana = $mana;
            $this->weapon = $weapon;
            $this->atk = $atk;
        }
//        METHODS
    
    public function fight(Character2 $opponent){
            $turn = 1;
        echo 'Fight! <br>';
//        sleep(3);
            while($this->health>0 && $opponent->health>0){
                if($turn%2){
                    $dmg = ($opponent->atk) + ((($opponent->atk)/100)*rand(-10,10));
                    $this->health -= $dmg;
                    echo '<span class=\'char1\'>'.$this->name.' a pris '.$dmg.' points de dégats! Il lui reste '.$this->health.' points de vie. </span>';
                } else {
                    $dmg = ($this->atk) + ((($this->atk)/100)*rand(-10,10));
                    $opponent->health -= $dmg;
                    echo '<span class=\'char2\'>'.$opponent->name.' a pris '.$dmg.' points de dégats! Il lui reste '.$opponent->health.' points de vie. </span>';
                }
                $turn++;
//                sleep(3);
            }
            if($this->health<=0) {
                echo $this->name.' a perdu le combat: il est MORT.';
            } else {
                echo $opponent->name.' a perdu le combat: il est MORT.';
            }
            
   
          
       
    }
    
    
//        GETTER - SETTER
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
         * @return int
         */
        public function getHealth(): int
        {
            return $this->health;
        }
        
        /**
         * @param int $health
         */
        public function setHealth(int $health): void
        {
            if(in_array($health, [self::LOW_HEALTH,self::MEDIUM_HEALTH,self::HIGH_HEALTH])){
                $this->health = $health;
            }
        }
        
        /**
         * @return int
         */
        public function getMana(): int
        {
            return $this->mana;
        }
        
        /**
         * @param int $mana
         */
        public function setMana(int $mana): void
        {
            $this->mana = $mana;
        }
        
        /**
         * @return string
         */
        public function getWeapon(): string
        {
            return $this->weapon;
        }
        
        /**
         * @param string $weapon
         */
        public function setWeapon(string $weapon): void
        {
            $this->weapon = $weapon;
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
        
    }
    
    