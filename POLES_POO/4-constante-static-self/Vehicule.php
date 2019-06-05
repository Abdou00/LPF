<?php
class Vehicule
{
	private static $marque = 'BMW'; //appartient à la classe
	private $couleur = 'noir'; // appartient à l'objet

	public function setMarque($m){

		self::$marque = $m;  //propriété static (self::)
	}
	public function getMarque(){

		return self::$marque; //propriété static (self::)
	}
	public function setCouleur($c){

		$this->couleur = $c; //propriété ($this->)
	}
	public function getCouleur(){

		return $this->couleur; //propriété ($this->)
	}
}
//---------------------------------------------------------------------------------------
$vehicule1 = new Vehicule;
echo 'Vehicule1 de marque ' . $vehicule1->getMarque() . ' et de couleur ' . $vehicule1->getCouleur() . '<hr>'; //BMW - noir

$vehicule2 = new Vehicule;
echo 'Vehicule2 de marque ' . $vehicule2->getMarque() . ' et de couleur ' . $vehicule2->getCouleur() . '<hr>'; //BMW - noir

$vehicule3 = new Vehicule;
$vehicule3->setCouleur('rouge'); //modification sur l'objet en cours !
echo 'Vehicule3 de marque ' . $vehicule3->getMarque() . ' et de couleur ' . $vehicule3->getCouleur() . '<hr>'; //BMW - rouge

$vehicule4 = new Vehicule;
echo 'Vehicule4 de marque ' . $vehicule4->getMarque() . ' et de couleur ' . $vehicule4->getCouleur() . '<hr>'; //BMW - noir

$vehicule5 = new Vehicule;
$vehicule5->setMarque('Mercedes'); //modification de la classe (car la propriété $marque est static) et donc modification de tous les futurs objets émanant de la classe
echo 'Vehicule5 de marque ' . $vehicule5->getMarque() . ' et de couleur ' . $vehicule5->getCouleur() . '<hr>'; //Mercedes - noir

$vehicule6 = new Vehicule;
echo 'Vehicule6 de marque ' . $vehicule6->getMarque() . ' et de couleur ' . $vehicule6->getCouleur() . '<hr>'; //Mercedes - noir



