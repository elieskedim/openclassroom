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

    public function gagnerExperience(){
        $this->_experience = $this->_experience + 1;
    }
}

$perso = new Personnage;
$perso->parler();
echo '<hr>';
$perso->afficheExperience();
echo '<hr>';
$perso->gagnerExperience();
$perso->afficheExperience();
echo '<hr>';
$perso->gagnerExperience();
$perso->afficheExperience();
echo '<hr>';
$perso2 = new Personnage;
$perso2->afficheExperience();

