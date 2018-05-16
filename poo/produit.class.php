<?php

class Produit{
	//attributs d'instance (objet)
	public  $_libelle;
	private $_prix;


public function __construct($libelle="", $prix=0){
		$this->_libelle = $libelle;
		$this->_prix = $prix;
	}

		public function afficher(){
		echo '<br>libelle est '.$this->_libelle;
		echo '<br>prix est '.$this->_prix;
	}

	//setter
	public function  set_prix($prix){
		if($prix<0 || ! is_numeric($prix)){
			die("erreur prix ...");
		}else 
$this->_prix=$prix;
	}
	public function  get_prix(){
return $this->_prix;
	}


	public function  set_libelle($libelle){

$this->_libelle=$libelle;
	}
	public function  get_libelle(){
return ucfirst($this->_libelle);
	}
	//les modificateurs => private public  
	//il y a 3 principes de la POO :
//	1- encapsulation : 
}


?>