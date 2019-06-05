<?php
// Les méthodes magiques s'exécutent autmatiquement.
class Societe{

	public $adresse;
	public $ville;
	public $cp;

	public function __construct(){}
	public function __set($nom, $valeur){ //Se déclenche uniquement en cas de tentative d'affectation sur une propriété inexistante.

		echo "La propriété $nom n'existe pas, la valeur $valeur n'a donc pas été affectée!<br>";
	}
	public function __get($nom){ //Se declenche uniquement en cas de tentative d'affichage sur une propriété inexistante.

		echo "La propriété $nom n'existe pas, on ne peut pas l'afficher!<br>";				
	}
	public function __call($nom, $argument){ //Se declenche uniquement en cas de tentative d'exécution sur une methode qui n'existe pas.

		echo "tentative d'exécuter la méthode $nom mais elle n'existe pas.<br> Les arguments étaient : " . implode('-', $argument) . '<br>';
	}
}

//-----------------------------------------------------------------------------------------
$societe1 = new Societe;
//$societe1->villes = 'Paris'; //test - lorsque l'on tente d'affecter une valeur à une propriété inexistante, ca fonctionne et ajoute donc la propriété et sa valeur à l'objet.
//echo $societe1->titre; //erreur undefine, la propriété n'existe pas!
//$societe1->methode(); //erreur fatal, la methode n'existe pas !
//---------------------------
$societe1->pays= 'France'; //declenchement de la methode __set() au lieu de la création d'une nouvelle propriété
$societe1->ville = 'Paris'; //la propriété existe, pas de déclenchement de __set().

echo $societe1->titre; //declenchement de la methode __get() au lieu d'une erreur undefine.
echo $societe1->methode1(1,2,3); //Declenchement de __call() au lieu d'une erreur fatale.

print('<pre>');
	print_r($societe1);
print('</pre>');

//-------------------------------------------------------------------------------------------
/*
Il existe plusieurs autres methodes magiques.
__callSatic($nom, $argument) => pour les methodes 'static'
__isset($nom) => se lance lors d'une condition isset/empty sur une propriété
__destruct() => se lance a la fin de l'exécution du script. (pratique pour ferme la connexion à la BDD par exemple)
etc.... => voir la doc
*/






