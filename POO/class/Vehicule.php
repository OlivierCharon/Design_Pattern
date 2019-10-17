<?php
//    namespace Car;
    
    /**
     * Class Vehicule
     */
    class Vehicule
    {
//      Attributs (qui sont des variables dans une class)
        /**
         * @var
         */
        private $color;
        /**
         * @var
         */
        private $numberOfWheels;
        /**
         * @var
         */
        private $assistedDirection;
        /**
         * @var
         */
        private $energy;
        /**
         * @var
         */
        private $energyLvl;

//      Methodes (qui sont des fonctions dans une class)
        
        /**
         * Vehicule constructor.
         * @param string $color
         * @param int $numberOfWheels
         * @param bool $assistedDirection
         * @param string $energy
         * @param int $energyLvl
         */
        public function __construct(string $color, int $numberOfWheels, bool $assistedDirection, string $energy, int $energyLvl)
        {
            $this->setNumberOfWheels($numberOfWheels);
            $this->setEneryLvl($energyLvl);
            $this->setEnergy($energy);
            $this->setAssistedDirection($assistedDirection);
            $this->setColor($color);
        }
        
        /**
         * @param int $energyLvl
         */
        public function setEneryLvl(int $energyLvl): void
        {
            $this->energyLvl = $energyLvl;
        }
        
        /**
         * @param bool $assistedDirection
         */
        public function setAssistedDirection($assistedDirection)
        {
            $this->assistedDirection = $assistedDirection;
        }

//      START GETTER / SETTER
        
        /**
         * @return string|null
         */
        public function rouler(): ?string
        {
            return "Cette voiture roule!";
        }
        
        /**
         * @param Vehicule $otherCar
         * @param $value
         * @return string|null
         */
        public function refullWith(Vehicule $otherCar, $value): ?string
        {
            if ($value > 0 && $value <= $otherCar->energyLvl) {
                $this->energyLvl += $value;
                $otherCar->energyLvl -= $value;
                return 'La voiture a été rechargée avec la seconde voiture. Elle a à présent ' . $this->energyLvl . 'L d\'essence,
                et l\'autre en a ' . $otherCar->energyLvl . 'L.';
            } else {
                return 'La seconde voiture n\'a pas assez d\'essence';
            }
        }
        
        /**
         * @return int
         */
        public function getNumberOfWheels()
        {
            return $this->numberOfWheels;
        }
        
        /**
         * @param int $numberOfWheels
         */
        public function setNumberOfWheels($numberOfWheels)
        {
            $this->numberOfWheels = $numberOfWheels;
        }
        
        /**
         * @return string
         */
        public function getColor()
        {
            return $this->color;
        }
        
        /**
         * @param string $color
         */
        public function setColor($color)
        {
            $this->color = $color;
        }
        
        /**
         * @return bool
         */
        public function isAssistedDirection()
        {
            return $this->assistedDirection;
        }
        
        /**
         * @return string
         */
        public function getEnergy()
        {
            return $this->energy;
        }
        
        /**
         * @param string $energy
         */
        public function setEnergy($energy)
        {
            $this->energy = $energy;
        }
        
        /**
         * @return int
         */
        public function getEneryLvl(): int
        {
            return $this->energyLvl;
        }

//      END GETTER / SETTER
        
    }