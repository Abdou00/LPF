<?php
/*
EXERCICE : 
Créez une classe Membre, avec les propriétés pseudo et mdp 
	class Membre{
		private $pseudo; (le pseudo doit etre inférieur à 15 caractères et supérieur à 0... ET que ce soit un string !!)
		private $mdp;
	}

=> Objectif : afficher le pseudo et le mdp 
*/
class Membre{
	private $pseudo;
	private $mdp;

	public function setPseudo($arg){
		// if(is_string($arg)){
		// 	if(strlen($arg) > 0 && strlen($arg) < 15){
		// 		$this->pseudo = $arg;
		// 	}
		// }
		if(is_string($arg) && (strlen($arg) > 0 && strlen($arg) < 15) ){
			$this->pseudo = $arg;
		}
	}
	public function getPseudo(){
		
		return $this->pseudo;
	}
	public function setMdp($arg){
		$this->mdp = $arg;
	}
	public function getMdp(){
		return $this->mdp;
	}
}
//---------------------------------------------
$membre1 = new Membre;

$membre1->setPseudo('Marco');
$membre1->setMdp('Polo');

echo 'Pseudo :' . $membre1->getPseudo() . '<br>';
echo 'Mdp :' .$membre1->getMdp();







