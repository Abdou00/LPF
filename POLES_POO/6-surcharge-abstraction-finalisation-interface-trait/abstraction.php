<?php
abstract class Joueur{

	public function seConnecter(){

		return $this->EtreMajeur();
	}
	abstract public function EtreMajeur(); //Les méthodes abstraites n'ont pas de contenu
	abstract public function Devise();
}
//----------------------------------
class JoueurFr extends Joueur{

	public function EtreMajeur(){ //OBLIGATION de redéfinir la méthode ma classe parente sinon on obtient une erreur
		return 18;
	}
	public function Devise(){ //OBLIGATION de redéfinir la méthode ma classe parente sinon on obtient une erreur

		return '€';
	}
}
//----------------------------------
class JoueurUs extends Joueur{

	public function EtreMajeur(){ //OBLIGATION de redéfinir la méthode ma classe parente sinon on obtient une erreur
		return 21;
	}
	public function Devise(){ //OBLIGATION de redéfinir la méthode ma classe parente sinon on obtient une erreur

		return '$';
	}
}
//---------------------------------------------------------------
//$joueur = new Joueur; //erreur, une classe abstraite n'est pas instanciable !!!

$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter() .'<hr>';

$joueurUs = new JoueurUs;
echo $joueurUs->seConnecter();

//---------------------------------------------------------------------------------------
/*
	Une classe abstraite (abstract) N'EST PAS instanciable !
	Les méthodes abstraites (abstract) N'ONT PAS de contenu !
	Lorsque l'on hérite de méthodes abstraites, nous sommes OBLIGES de les redéfinir !
	Pour définir des méthodes abstraites, il est NECESSAIRE que la CLASSE qui les CONTIENT soit ABSTRAITE !!
	Par ailleurs, une classe abstraite peut contenir des méthodes normales.







*/








