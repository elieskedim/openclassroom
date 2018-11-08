<?php
class PersonnageManager{
	private $_db;//Instance de PSO


	public function __construct($db){
		$this->setDb($db);
	}

	public function add(Personnage $perso){
		//Prépareation de la requête d'insertion
		//assignation des valeur pour le nom, la force, les degats, l'éxperience et le niveau du personnage 
		//Execution de la requête 
	}

	public function delete(Personnage $perso){
		//Execute une requette de type delete
	}

	public function get($id){
		//Execute une requête de type SELECT avec une clause WHERE
	}

	public function setDb(PDO $db){
		$this->_db = $db;
	}
}