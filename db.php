<?php
   
    class SPDO
    {
<<<<<<< HEAD
        /**
         * Constante: nom d'utilisateur de la bdd
         *
         * @var string
         */
        const USER = 'root';
        /**
         * Constante: hôte de la bdd
         *
         * @var string
         */
        const HOST = 'localhost';
        /**
         * Constante: hôte de la bdd
         *
         * @var string
         */
        const PASS = '0000';
        /**
         * Constante: nom de la bdd
         *
         * @var string
         */
        const DBNAME = 'pooCharacters';
        /**
         * Instance de la classe SPDO
         *
         * @var PDO
         * @access private
         * @static
         */
        private static $instance = null;
        /**
         * Instance de la classe PDO
         *
         * @var PDO
         * @access private
         */
        private $PDOInstance = null;
       
        /**
         * Constructeur
         *
         * @param void
         * @return void
         * @see PDO::__construct()
         * @access private
         */
        private function __construct()
        {
            $this->PDOInstance = new PDO('mysql:dbname=' . self::DBNAME . ';host=' . self::HOST, self::USER, self::PASS);
        }
       
        /**
         * Crée et retourne l'objet SPDO
         *
         * @access public
         * @static
         * @param void
         * @return PDO $instance
         */
=======
        const USER = 'root';
        const HOST = 'localhost';
        const PASS = '0000';
        const DBNAME = 'pooCharacters';
        private static $instance = null;

        private function __construct()
        {
            $this->instance = new PDO('mysql:dbname=' . self::DBNAME . ';host=' . self::HOST, self::USER, self::PASS);
        }

>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
        public static function getInstance()
        {
            if (is_null(self::$instance)) {
                self::$instance = new SPDO();
            }
            return self::$instance;
        }
       
<<<<<<< HEAD
        /**
         * Exécute une requête SQL avec PDO
         *
         * @param string $query La requête SQL
         * @return PDOStatement Retourne l'objet PDOStatement
         */
        public function query($query)
        {
            return $this->PDOInstance->query($query);
        }
       
        public function prepare($statement)
        {
            return $this->PDOInstance->prepare($statement);
        }
=======
        
>>>>>>> 0056bd2f6d0b086557a2cb5c8a91c81f2120d3f6
    }
