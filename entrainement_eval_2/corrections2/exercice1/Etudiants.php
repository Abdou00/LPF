
<?php

class Etudiant
{
	private $prenom, $nom, $email, $telephone;
	
	//Setter & Getter prenom
	public function setPrenom($arg){
		if(is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30){
			$this -> prenom = $arg; 
		}
		return $this; 
	}
	public function getPrenom(){
		return $this -> prenom;
	}
	
	//Setter & Getter prenom
	public function setNom($arg){
		if(is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30){
			$this -> nom = $arg; 
		}
		return $this; 
	}
	public function getNom(){
		return $this -> nom;
	}
	
	//Setter & Getter prenom
	public function setEmail($arg){
		if(filter_var($arg, FILTER_VALIDATE_EMAIL)){
			$this -> email = $arg; 
		}
		return $this; 
	}
	public function getEmail(){
		return $this -> email;
	}
	
	//Setter & Getter prenom
	public function setTelephone($arg){
		if(preg_match('#^[0-9]{10}$#', $arg)){
			$this -> telephone = $arg; 
		}
		return $this; 
	}
	public function getTelephone(){
		return $this -> telephone;
	}
	
	public function getInfos(){
		$infos = array(); 
		$infos['prenom'] = $this -> getPrenom();
		$infos['nom'] = $this -> getNom();
		$infos['email'] = $this -> getEmail();
		$infos['telephone'] = $this -> getTelephone();
		
		return $infos;
	}
	
	
	
	
	
	
	
	
}