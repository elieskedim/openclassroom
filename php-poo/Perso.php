<?php
class Perso{
    private $_degat = 0; //Les degats du personnage 
    private $_experience = 0; // L'éxperience du personnage 
    private $_force = 20; //  La force du personnage (plus elle est grande, plus l'attaque est puissante).

    public function gagnerExperience(){
        //On ajout 1 à notre attribut experience
        $this->_experience++;
    }

    public function fraper(Personnage $target){
        $target->_degat = ($target->_degat + $this->_force);
    }

    public function getDegat(){
        return $this->_degat;
    }

    public function getExperience(){
        return $this->_experience;
    }

    public function getForce(){
        return $this->_force;
    }
}
$perso1 = new Perso;
var_dump($perso1);
echo '<hr>';
$perso2 = new Perso;
var_dump($perso2);
echo '<hr>';
$perso1->fraper($perso2);
$perso1->gagnerExperience();
var_dump($perso2);
echo '<hr>';
$perso2->fraper($perso1);
$perso2->gagnerExperience();
var_dump($perso1);
echo '<hr>';
var_dump($perso2);