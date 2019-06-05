<?php

/*
    Marque (string de 3 à 30 caractères)
        Modèle (string de 3 à 30 caractères)
        année  (INT de 4 caractères)
        couleur (string de 3 à 30 caractères)
        km (INT de 1 à 6 caractères)
*/

class Vehicule{

	private $marque; 
	private $modele; 
	private $annee; 
	private $couleur; 
	private $km; 
	
	
	public function setMarque($arg){
		if(is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 30){
			$this -> marque = $arg; 
		}
		return $this; 
	}
	public function getMarque(){
		return $this -> marque;
	}
	
	
	public function setModele($arg){
		if(is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 30){
			$this -> modele = $arg; 
		}
		return $this; 
	}
	public function getModele(){
		return $this -> modele;
	}
	
	public function setAnnee($arg){
		if(is_numeric($arg) && strlen($arg) == 4){
			$this -> annee = $arg; 
		}
		return $this; 
	}
	public function getAnnee(){
		return $this -> annee;
	}
	
	
	public function setCouleur($arg){
		if(is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 30){
			$this -> couleur = $arg; 
		}
		return $this; 
	}
	public function getCouleur(){
		return $this -> couleur;
	}
	
	public function setKm($arg){
		if(is_numeric($arg) && strlen($arg) >= 1 && strlen($arg) <= 6 ){
			$this -> km = $arg; 
		}
		return $this; 
	}
	public function getkm(){
		return $this -> km;
	}
	
	
	//--------------------
	
	public function getInfos(){
		$infos = array(); 
		$infos['marque'] = $this -> getMarque();
		$infos['modele'] = $this -> getModele();
		$infos['couleur'] = $this -> getCouleur();
		$infos['annee'] = $this -> getAnnee();
		$infos['km'] = $this -> getKm();
		
		return $infos; 
	}
}

