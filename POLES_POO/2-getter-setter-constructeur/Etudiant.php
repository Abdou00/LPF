<?php
class Etudiant
{
	private $prenom;
	public function __construct($arg){
	// __construct : méthode appelée automatiquement lors d'une instanciation de la classe ('new'). On ne peut pas déclarer 2 constructeurs en PHP.

		echo "Instanciation, nous avons reçu l'information suivante : $arg ";
		$this->setPrenom($arg); //Il est préférable de passer par le setteur, comme ça, on passe dans les controles.
	}
	public function setPrenom($arg){
		$this->prenom = $arg;
	}
	public function getPrenom(){
		return $this->prenom;
	}
}
//---------------------------------------------------------------------------------------------------
$etudiant1 = new Etudiant('Jeremie'); // __construct() est appelée automatiquement, nous avons mis un argument après le nom de la classe qui attérit directement dans le constructeur.

echo '<br>Prenom : ' . $etudiant1->getPrenom() ; 

// $etudiant1->__construct(); // le constructeur peut tout de même etre appelé comme une méthode 'classique'


//---------Plus: 
//__construct : sera équivalent du init avec session_start(), connexion à la bdd, autoload, etc....
//__construct : methode magique qui s'exécute automatiquement








