<?php
    
    class SPDO
    {
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
        const DBNAME = 'BP';
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
        public static function getInstance()
        {
            if (is_null(self::$instance)) {
                self::$instance = new SPDO();
            }
            return self::$instance;
        }
        
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
    }