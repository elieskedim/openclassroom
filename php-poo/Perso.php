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

    public function setForce($force){
        if(!is_int($force)){
            trigger_error('La force d\'un personnage doit être un entier', E_USER_WARNING);
            return;
        }

        if($force > 100){
            trigger_error('La force d\'un personnage ne peut pas depasser 100', E_USER_WARNING);
            return;
        }

        if($force < 0){
            trigger_error('La force d\'un personnage ne peut pas être négatif', E_USER_WARNING);
            return;
        }

        $this->_force = $force;
    }

    public function setExperience($exp){
        if(!is_int($exp)){
            trigger_error('L\' éxperience d\'un personnage doit être un entier', E_USER_WARNING);
            return;
        }

        if($exp > 100){
            trigger_error('L\' éxperience' d\'un personnage ne peut pas depasser 100', E_USER_WARNING);
            return;
        }

        if($exp < 0){
            trigger_error('L\' éxperience' d\'un personnage ne peut pas être négatif', E_USER_WARNING);
            return;
        }

        $this->_experience = $exp;
    }
}
/*$perso1 = new Perso;
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
*/
$perso1 = new Perso;
echo "La force du perso 1 est de " . $perso1->getForce();
echo "Les dégats du perso un est de " . $perso1->getDegat();
echo "L'éxperience du perso 1 est de " . $perso1->getExperience();