<?php
class Personnage{//Création d'une classe simple.
    public $_nom = "Elies";
    private $test = 4;

}

class Magicien extends Personnage{//Notre classe Magicien hérite des attribut et des méthodes de notre class Personnage
    private $_magie; //Indique la puissance du magicien sur 100, sa capacité à produire de la magie.

    public function lancerUnSort($perso){
        $perso->recevoirDegats($this->_magie);//On va dire que la magie du magicien represente sa force.
    }
    

}

$magicien = new Magicien;
echo $magicien->getTest();