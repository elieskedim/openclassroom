<?php
class Personnage{
    private $_force;
    private $_localisation;
    private $_experience = 50;
    private $_degats;

    public function parler(){
        echo "Je suis un personnage !";
    }

    public function afficheExperience(){
        echo $this->_experience;
    }
}

$perso = new Personnage;
$perso->parler();
$perso->afficheExperience();