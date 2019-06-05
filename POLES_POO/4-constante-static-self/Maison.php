<?php
class Maison{

	public static $espaceTerrain = '500m²'; //appartient à la classe
	public $couleur = 'blanc'; //appartient à l'objet

	const HAUTEUR = '10m'; //appartient à la classe

	private static $nbPiece = 7; //appartient à la classe
	private $nbPorte = 10; //appartient à l'objet

	public static function getNbPiece(){

		return self::$nbPiece; //lors d'un self::, il faut mettre le $ devant la propriété
	}
	public function getNbPorte(){

		return $this->nbPorte;
	}
}
//----------------------------------------------------------------------------------------
echo 'nbPiece : ' . Maison::getNbPiece() . '<hr>'; //j'appel une méthode de ma classe par ma classe

echo 'espaceTerrain : ' . Maison::$espaceTerrain .'<hr>'; //j'appel une propriété de ma classe par ma classe

$maison1 = new Maison;
echo 'couleur : ' . $maison1->couleur .'<hr>';//j'appel une propriété de mon objet par mon objet

echo 'nbPorte : ' . $maison1->getNbPorte() .'<hr>';//j'appel une methode de mon objet par mon objet

echo 'hauteur : ' . Maison::HAUTEUR . '<hr>'; //j'appel une constante de ma classe par ma classe 

//--------------------------------

//echo $maison1->espaceTerrain; //erreur, on ne peut pas appeler une propriété static par mon objet

//echo Maison::$couleur; //erreur, one ne peut pas appeler une propriété public avec ma classe

//echo Maison::getNbPorte(); //erreur, on ne peut pas appeler une methode public par ma classe

//echo $maison1->getNbPiece(); //pas d'erreur...., Mais ca devrait !! Car la methode est static et donc il faudrait appeler par la calsse et non pas par l'objet

//echo $maison1::$espaceTerrain; //devrait donner là aussi une erreur, c'est n'importe quoi !! A banir !

//------------------------------------------------------------------------------
/*
Opérateurs: 
	$objet->élément d'un objet à l'exterieur de la classe
	$this->élément d'un objet à l'intérieur de la classe

	class::$élément d'une classe à l'exterieur de la classe
	self::élément d'une classe à l'intérieur de la classe

2 Questions à se poser:
	Est-ce que c'est 'static' ?
		Si OUI: => self:: , Class::
			Est-ce que c'est dans la classe ?
				Si OUI, self::
				Si NON, Class::

		Si NON: => $objet-> , $this->
			Est-ce que c'est dans la classe ?
				Si OUI, $this->
				Si NON, $objet->			

Précision : 
	STATIC : indique qu'un élément appartient à la classe
	CONST : indique qu'un élément appartient à la classe

Différence : 
	CONST : la constante ne changera pas
	STATIC : la propriété peut changer

















