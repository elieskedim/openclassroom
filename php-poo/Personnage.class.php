<?php
class Personnage{
	private $_id;
	private $_nom;
	private $_forcePerso;
	private $_degats;
	private $_niveau;
	private $_experience;



	 // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  	public function hydrate(array $donnees){
 		 foreach ($donnees as $key => $value){
    			$method = 'set'.ucfirst($key);

    			if(method_exists($this, $method)){
    				//traitements
    				$this->$method($value);//On appel le setter
    			}
  		}
  	}

	public function setId(int $id){
		if(is_numeric($id) && $id > 0){
			$this->_id = $id;
			return;
		}else{
			return "Veuillez induquez un nombre positive !";
		}
	}

	public function getId(){
		return $this->_id;
	}

	public function setNom(string $nom){
		if(is_string($nom)){
			$this->_nom = $nom;
		}else{
			return "Veuillez indiquez une chaine de carachtère";
		}
	}

	public function getNom(){
		return $this->_nom;
	}

	public function setForcePerso(int $force){
		if(is_numeric($force) && $force > 0 && $force <= 100){
			$this->_forecePerso = $force;
		}else{
			return "Veuillez indiquez un nombre, max 100";
		}
	}

	public function getForcePerso(){
		return $this->_forcePerso;
	}

	public function setDegats(int $degats){
		if(is_numeric($degats) && $degats >= 0 && $degats <= 100){
			$this->_degats = $degats;
		}else{
			return "Veuillez indiquez un nombre, max 100";
		}
	}

	public function getDegats(){
		return $this->_degats;
	}

	public function setNiveau(int $niveau){
		if(is_numeric($niveau) && $niveau > 0 && $niveau <= 100){
			$this->_niveau = $niveau;
		}else{
			return "Veuillez indiquez un nombre, max 100";
		}
	}

	public function getNiveau(){
		return $this->_niveau;
	}

	public function setExperience(int $exp){
		if(is_numeric($exp) && $exp > 0 && $exp <= 100){
			$this->_experience = $exp;
		}else{
			return "Veuillez indiquez un nombre, max 100";
		}
	}

	public function getExperience(){
		return $this->_experience;
	}
}