<?php
// Singleton : est un pattern qui permet de donner une solution à plusieurs problèmes récurrents.
class Singleton
{
	public $numero = 20;
	private static $instance = null;

	private function __construct(){} //La classe N'EST PAS INSTANCIABLE car le constructeur est privé !!
	private function __clone() {} // permet que l'objet ne soit pas clonable

	public static function getInstance(){

		if( is_null(self::$instance) ){ //Si $instance est null, ce qui est le cas la première fois. Toutes les autres fois, je ne rentre pas dans le 'if' car il y a maintenant un objet dans $instance

			self::$instance = new Singleton(); //Instanciation UNE SEULE FOIS !
		}
		return self::$instance; // Dans tous les cas, ici je retourne un objet $instance.
	} 
}
//-----------------------------------------------------------------------------------------
//$s = new Singleton; // Erreur normale car la fonction __construct() est en privé !!

$objet1 = Singleton::getInstance();
var_dump($objet1); echo '<br>';

$objet2 = Singleton::getInstance();
var_dump($objet2); echo '<br>';

$objet3 = Singleton::getInstance();
var_dump($objet3); echo '<br>';


echo $objet1->numero .'<br>'; //20
echo $objet2->numero .'<br>'; //20
echo $objet3->numero .'<br>'; //20

$objet2->numero = 36; // affectation

echo $objet1->numero .'<br>'; //36 // Tous les représentants de l'objet ont cette valeur pusiqu'il s'agit du même objet
echo $objet2->numero .'<br>'; //36
echo $objet3->numero .'<br>'; //36
