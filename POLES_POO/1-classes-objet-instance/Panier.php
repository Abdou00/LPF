<?php
//Une classe permet de produire plusieurs objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE.
class Panier
{
	public $nbProduit; // propriété
	
	public function ajouterArticle(){ // méthode
		// traitements
		return "L'article a bien été ajouté !";
	}
	protected function retirerArticle(){
		// traitements
		return "L'article a bien été retiré !";
	}
	private function affichageArticle(){
		// traitements
		return "Voici les articles !";
	}
}
//------------------------------------
$panier1 = new Panier; //new Panier <=> Instanciation (permet de déployer l'objet issue de la classe (ici, Panier) permet de passer d'une classe à l'objet.)
// $panier1 représente l'objet issue de la classe
var_dump($panier1);
//type(object), nom de la classe, référence de l'objet
$panier1->nbProduit = 5;
echo '<br>Panier1 : ' . $panier1->nbProduit . ' produits <br>'; //appel de la propriété public
echo '<br>Panier1 : ' . $panier1->ajouterArticle() . ' <br>'; //appel de la méthode public
//echo '<br>Panier1 : ' . $panier1->retirerArticle() . ' <br>'; //appel de la méthode public
//Error, l'élément est accessible uniquement dans la classe où cela a été déclaré ainsi que dans les classes héritières.
//echo '<br>Panier1 : ' . $panier1->affichageArticle() . ' <br>'; //appel de la méthode public
//Error, l'élément est accessible uniquement dans la clsse où cela a été déclaré ainsi.

$panier2 = new Panier;
var_dump($panier2);
$panier2->nbProduit = 10;
echo '<br>Panier2 : ' . $panier2->nbProduit . ' produits<br>';

echo '<br>Panier1 : ' . $panier1->nbProduit . ' produits <br>';

//-------------------------------------------------------------------------------
/*Niveau de visibilite:

	public : accesssible de partout
	protected : accessible uniquement dans la classe où cela a été déclaré ET aussi dans les classes héritières
	private : accessible uniquement dans la classe où cela a été déclaré

	new : mot-clé permettant d'effectuer une instanciation (et donc de créer un objet)
		Une classe permet de produire plusieurs objets et donc nous pouvons effectuer plusieurs instanciation 'new'
	Ici, $panier1 (et $panier2) représente l'objet issue de la classe Panier

Plus : Quand on instancie une classe, la variable stockant l'objet ne stocke en fait pas l'objet lui-meme, mais un identifiant qui représente cet objet (espace mémoire en ram sur le serveur)






