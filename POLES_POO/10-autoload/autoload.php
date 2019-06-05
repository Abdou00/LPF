<?php
function inclusionAutomatique($nomDeLaClasse){

	include_once( $nomDeLaClasse .'.class.php' );

	echo 'On passe dans inclusionAutomatique ! <br>';
	echo "require($nomDeLaClasse.class.php); <br>";
}
//-----------------------------------

spl_autoload_register( 'inclusionAutomatique' );

//-----------------------------------
//spl_autoload_register() : permet d'exécuter une fonction lorsque l'interupteur voit passer un 'new' dans le code
//Le nom à coté du 'new' est récupéré et transmis automatiquement à la fonction
//ATTENTION !! Pour que l'autoload fonctionne, il est INDISPENSABLE de respecter une convention de nommage sur les fichiers.






