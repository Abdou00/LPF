<?php
class Membre{

	public $id = 10;
	public $pseudo;
	public $mdp;

	public function __construct(){ //fonction qui s'exècute automatiquement
		echo 'Internaute ! <br>';
	}
	public function inscription(){
		//traitements
		return "Je m'inscris ! <br>";
	}
	public function seConnecter(){
		//traitements
		return "Je me connecte ! <br>";
	}
}
//----------------------------------------------
class Admin extends Membre{ // extends = heritage, comme include, ici on a un copier/coller du code contenu dans la classe Membre
	public function accesBackOffice(){

		return 'Acces BackOffice ! <br>';
	}
}
//-------------------------------------------------------------------------------------
$admin1 = new Admin; //Je crée un objet admin qui herite de la class Membre //Affiche la fonction construct()

echo $admin1->seConnecter(); // j'accède à la méthode par l'objet admin1
echo $admin1->accesBackOffice();
echo $admin1->id . '<hr>'; // j'accède à la propriété par l'objet admin1

//------------------
$membre1 = new Membre;

echo $membre1->seConnecter(); // j'accède à la méthode par l'objet membre1
echo $membre1->id; // j'accède à la propriété par l'objet membre1
echo $membre1->accesBackOffice(); //ERREUR !! La méthode accesBackOffice() n'est pas dans ma classe Membre et je n'ai pas d'héritage de ma classe admin donc je ne peux pas accéder à cette méthode

//LORS D'UN HERITAGE, ON HERITE DE TOUT !!! (même ce qui est private !)










