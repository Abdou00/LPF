<?php
//surchager (override) : Une surcharge me permet de prendre le comportement de ma fonction d'origine et d'y ajouter un traitement complémentaire.
class A{

	public function calcul(){
		//traitements
		return 10;
	}
}
//------------------------------
class B extends A{

	public function calcul() //Redéfinition
	{
		$n = parent::calcul();
		//On n'utilisera pas $this->calcul() sinon, la fonction sera récursive et la méthode s'appelera en boucle.
		// 'parent' fonctionne donc pour appeler une méthode d'une classe aprente LORS d'une surcharge. (afin d'éviter quelle ne s'appelle elle même avec $this->calcul() )
		// self::calcul() ne fonctionnerait pas non plus, car on essayerait d'appeler quelque chose de la classe courante (alros qu'ici, on a besoin de la classe parente)
		if($n <= 100){
			return "$n est inférieur ou égale à 100";
		}
		else{
			return "$n est supérieur à 100";
		}
	}
	public function autreCalcul(){

		$nb = parent::calcul(); // Il est possible d'atteindre une méthode de mon parent, même s'il n'y a pas de surcharge
	}
}
//----------------------------------------------------------------------------------
$objetB = new B;
echo $objetB->calcul();
//affiche 10 est inférieur ou égale à 100 - J'ai redéclaré la méthode calcul() dans la classe enfant (B), cela s'appel une surcharge, je modifie légèrement le comportement initial contenu dans le parent (A) via son enfant (B)

//----------------------------------------------------------
/*Une surcharge: permet de prendre en compte le comprotement de la méthode héritée afin d'en bénéficier, tout en apportant un traitement complémentaire.

Différence entre self:: et parent::
	Lorsque l'on utilise "self::" on demande d'utiliser ce qui est dans la Classe courante ou ce que l'on a hérité sans l'avoir redéfinie dans notre class. ET il faut que cela appartiennent a la classe.
	Quand on utilise : "parent::" on demande d'utiliser les élément de la calsse dont on a hérité.












