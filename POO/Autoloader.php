<?php
        /**
         * Inclue le fichier correspondant à notre classe
         * @param $class string Le nom de la classe à charger
         */
        function autoloader($class)
        {
            require 'class/' . $class . '.php';
        }
        
        spl_autoload_register( 'autoloader');