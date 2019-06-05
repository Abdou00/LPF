<?php 

class Etudiant
{
	private $prenom; 
	private $nom; 
	private $email; 
	private $telephone; 
	
	// getter et setter de prenom
	public function setPrenom($arg){
		if(is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30){
			$this -> prenom = $arg;
		}
		return $this;
	}
	public function getPrenom(){
		return $this -> prenom;
	}
	
	// getter et setter de nom
	public function setNom($arg){
		if(is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30){
			$this -> nom = $arg;
		}
		return $this;
	}
	public function getNom(){
		return $this -> nom;
	}
	
	public function setEmail($arg){
		if(filter_var($arg, FILTER_VALIDATE_EMAIL)){
			$this -> email = $arg;
		}
		return $this;
	}
	public function getEmail(){
		return $this -> email;
	}
	
	public function setTelephone($arg){
		if(is_numeric($arg) && strlen($arg) == 10){
			$this -> telephone = $arg;
		}
		return $this;
	}
	public function getTelephone(){
		return $this -> telephone;
	}
	
	//-----
	public function getInfos(){	
		$infos['prenom'] = $this -> getPrenom();
		$infos['nom'] = $this -> getNom();
		$infos['telephone'] = $this -> getTelephone();
		$infos['email'] = $this -> getEmail();
		return $infos;
	}
}