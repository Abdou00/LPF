<?php
//Exception : version procédural et tendance Orienté Objet.
//L'avantage des exceptions c'est de centraliser un traitement à effectuer dans le catch en cas d'erreur.
function recherche($tab, $element){

	if( !is_array($tab) ){

		Throw new Exception('Vous devez envoyer un Array !');
		//Throw : permet de nous envoyer dans le bloc catch et d'arréter l'exécution du code.
	}
	if( sizeof($tab) <=0 ){

		Throw new Exception('Vous devez envoyer un Array avec du contenu.');
	}
	$position = array_search($element, $tab);
	return $position;
}
//------------------------------------------------------------------------------------------------
$tab = array();
$liste = array('orange', 'fraise', 'pomme');

try{ //bloc d'essai (On essaie d'effectuer les instructions suivante dans le try)

	echo recherche($liste, 'pomme') . '<br>';
	echo recherche($tab, 'pomme') . '<br>';
	echo recherche('tableau', 'pomme') . '<br>';
	echo 'Traitements.....';

}
catch(Exception $e){ //bloc de capture. On va attraper les exceptions 'Exception' s'il y en a une qui est relevée. $e représente l' 'Exception' car en renseignant le 'Throw', je n'ai pas pu mettre le nom d'une variable puisque l'exception est stoppée pour arriver dans le catch.

	echo "Message d'erreur : " . $e->getMessage() . '<br>';
	echo "Traitement conforme dans le cas où l'argument ne soit pas un Array, OU que l'argument soit un Array vide. <br>";
	echo "Informations : " . $e->getCode() . '<br>Message : ' . $e->getMessage() . '<br>Fichier : ' . $e->getFile() . '<br>Ligne : ' . $e->getLine() . '<br>';
}
//--------------------------------------------------------------------------------------
/*
EXCEPTION : est une classe prédéfinie
Une Exception est une erreur que l'on peut attraper grâce à try/catch
Throw : permet d'arrêter l'exécution du 'try' et de rentrer le 'catch'
try et catch permet d'avoir 2 blocs d'instructions distinctes.
*/
//------------------------------------------------------------
echo '<hr><hr>';
try{
	$bdd = new PDO('mysql:host=localhost;dbname=test21', 'root', '');//tentative de connexion

	echo 'Connexion réussie !!'; //Si la connexion est réussie, alors cette isntruction sera exécutée.

}
catch(PDOException $e){ //On attrape les exceptions PDOException

	echo 'La connexion à la bdd a échoué !!';
}

print '<pre>';
	print_r( get_class_methods($e) );
print '</pre>';


















