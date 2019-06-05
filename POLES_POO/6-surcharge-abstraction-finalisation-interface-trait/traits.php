<?php
trait TPanier{

	public $nbProduit = 1;
	public function affichageProduits(){

		return 'Affichage des produits. <br>';
	}
}
//------------------------------
trait TMembre{

	public function affichageMembres(){

		return 'Affichage des membres. <br>';
	}
}
//------------------------------
class Site{

	use TPanier, TMembre; //utilisation des traits
}
//----------------------------------------------------------------------------------
$site = new Site;

echo $site->affichageProduits().'<br>';
echo $site->nbProduit .'<br>';
echo $site->affichageMembres().'<br>';

var_dump($site); echo '<br>';
var_dump( get_class_methods($site) ); echo '<br>';

//----------------------------------------------------------------------------------
/*
Les traits ont été inventés pour repousser les limites de l'heritage.
Une classe ne peut hériter que d'une seule classe à la fois. En revanche, elle peut importer (donc hériter) de plusieurs traits.
Il est utile d'utiliser les traits quand l'une de vos classes a besoin d'une méthode 'x' de la classe A , 'y' de la classe B et 'z' de la classe C.

Un trait n'est pas instanciable. Un trait est un regroupement de méthodes et de propriétés pouvant etre importées au sein d'une classe.*/
//----------------------------------------------------------------------------------
trait A{
	public function a(){ return 'a'; }
}

trait B{
	use A;
	public function b(){ return 'b'; }
}

class Test{

	use B;
}
//----------------------------
$objet = new Test;
echo $objet->a() .'<br>';
echo $objet->b() .'<br>';

//----------------------------------------------------------------------------------
trait MonTrait{

	public function DireBonjour(){
		echo 'hello !';
	}
}
class MaClass{

 	use MonTrait;
 	public function DireBonjour(){
 		echo 'Bonjour !';
 	}
}
$objet = new MaClass;
$objet->DireBonjour(); //affiche : 'Bonjour'
//Si une classe déclare une méthode et qu'elle utilise un trait possédant cette même méthode, ALORS la méthode déclarée dans la classe l'emportera sur la méthode déclarée dans le trait.
echo '<hr>';
//----------------------------------------------------------------------------------
trait Z{

	public function direBonjour(){
		echo 'hello';
	}
}
class MaClass2{

 	use Z{

 		direBonjour as DireHello;
 	}
}
$objet2 = new MaClass2;
$objet2->DireBonjour(); echo '<br>';
$objet2->DireHello();















