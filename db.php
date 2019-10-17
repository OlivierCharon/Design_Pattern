<?php
   
    class SPDO
    {
        const USER = 'root';
        const HOST = 'localhost';
        const PASS = '0000';
        const DBNAME = 'pooCharacters';
        private static $instance = null;

        private function __construct()
        {
            $this->instance = new PDO('mysql:dbname=' . self::DBNAME . ';host=' . self::HOST, self::USER, self::PASS);
        }

        public static function getInstance()
        {
            if (is_null(self::$instance)) {
                self::$instance = new SPDO();
            }
            return self::$instance;
        }
       
        
    }
