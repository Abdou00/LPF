<?php
final class Application{ // 'final' indique que la classe Apllication NE POURRA PAS ETRE HERITEE.

	public function lancementApp(){

		return "L'appli se lance comme cela !";
	}
}
//class Extension extends Application{} // erreur, on ne peut pas hériter d'une classe "final".

$app = new Application;
echo $app->lancementApp() . '<br>'; 
//--------------------------------
class Application2{

	final public function lancementApp(){

		return "L'appli se lance comme cela !";
	}
}
//--------------------------------
class Extension2 extends Application2{

	//public function lancementApp(){} //erreur, on ne peut pas surcharger ou redéfinir la méthode car elle est "final" dans la classe parente 'Application2'.
}

$extension2 = new Extension2;
echo $extension2->lancementApp();

//-----------------------------------------------------------------------------------------------
/*
	Une classe finale NE PEUT ETRE héritée
		Une classe 'final' aura forcément des méthodes qui ne pourront pas etre surchargées ou redéfinies. (Pas d'intérêt à mettre le mot-clé 'final' sur les méthodes d'une classe "final")
		Une classe 'final' peut contenir des méthodes normales (mais cela n'a aucun intérêt car on ne peut pas hériter d'une classe 'final' donc il n'y a aucun risque que les méthodes soient redéfinies).
		Une méthode private avec le mot-clé 'final' n'a aucun interet (car on peux les modifier qu'à l'intérieur de la calsse, elles ne risquent donc pas de pouvoir etre surchargées).
	Une classe 'final' reste intanciable !
	Une méthode 'final' peut-etre présente dans une classe 'normale'
	Une méthode 'final' permet d'éviter qu'elle soir redéfinie ou surchargée.
	
	L'interet du mot-clé 'final' sur une méthode est de vérouiller afin d'empecher toute 'sous-class' de la redéfinir (quand nous voulons etre sûr que le comportement d'une méthode est préservée durant l'héritage).















