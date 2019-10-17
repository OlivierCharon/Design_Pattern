<?php
    
    namespace Character;

    class Character
    {
        private $_name;
        private $_hp;
        private $_spells;
    
        public function __construct($name, $hp, $spells) // Constructeur demandant 2 paramètres
        {
            echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
            $this->setName($name); // Initialisation de la force.
            $this->setHP($hp); // Initialisation des dégâts.
            $this-> spells = []; // Initialisation de l'expérience à 1.
        }
    
        