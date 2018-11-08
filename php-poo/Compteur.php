<?php
class Compteur{
	public static $_compteur;

	public function __construct(){
		self::$_compteur++;
	}
}
$compteur = new Compteur;
echo Compteur::$_compteur . '<hr>';
$compteur2 = new Compteur;
echo Compteur::$_compteur . '<hr>';
$compteur3 = new Compteur;
echo Compteur::$_compteur . '<hr>';