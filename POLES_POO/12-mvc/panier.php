<?php
session_start();

if(isset($_GET['action']) && $_GET['action'] == 'vider' ){

	unset($_SESSION['panier']);
}

//------------------------------------------------------------------------

if(isset($_GET['action']) && $_GET['action'] == 'create' || isset($_SESSION['panier']) ){ //si le panier existe ou qu'il est en cours de création

	$_SESSION['panier'] = array(26, 30, 54);
	echo 'Produits présents dans le panier : ' . implode($_SESSION['panier'], ' - ') . '<br>';
	echo '<a href="?action=vider">vider le panier</a>';

}
else{ //Sinon, le panier n'existe pas

	echo '<a href="?action=create">Créer le panier</a>';
}

//------------------------------------------------------------------------





