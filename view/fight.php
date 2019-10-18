<?php

while ($firstCharacter->getHealth() > 0 && $evilVilain->getHealth() > 0 ) 
    {
        if($firstCharacter->getHealth() > 0)
        {  
            $firstCharacter->combat($evilVilain);
            echo "Le " .$firstCharacter->getJob(). " attaque le " .$evilVilain->getName(). " avec " .$firstCharacter->getWeapon()." !<br>";
            if ($evilVilain->getHealth() <= 0)
            {
                echo " il reste 0 hp au " .$evilVilain->getName(). "<br>";
                echo "<br>Le " . $evilVilain->getName(). " est mort !<br>";
                Monster::dead($monsterFighting['idMonster']);
                ?> 
                    <a href="/">Retour à la page d'accueil !<a>
                <?php


            } elseif ($evilVilain->getHealth() > 0) {
                echo " il reste " .$evilVilain->getHealth(). " hp au " .$evilVilain->getName(). "<br>";
            }
        }
        if($evilVilain->getHealth() > 0)
        {
            $evilVilain->combat($firstCharacter);
            echo 'Le '. $evilVilain->getName() . ' attaque ' . $firstCharacter->getJob(). " !<br>";
            if ($firstCharacter->getHealth() <= 0)
            {
                echo " il reste 0 hp au " .$firstCharacter->getJob(). "<br>";
                echo "<br>Le " . $firstCharacter->getJob()." ". $firstCharacter->getName(). " est mort !<br>";
                Character::dead($characterFighting['idChara']);
                ?> 
                    <a href="/">Retour à la page d'accueil !<a>
                <?php
            } elseif ($firstCharacter->getHealth() > 0) {
                echo " il reste " .$firstCharacter->getHealth(). " au " .$firstCharacter->getJob(). "<br>";
            }
           
        }
    }