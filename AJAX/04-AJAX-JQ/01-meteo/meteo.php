<?php
// En AJAX, nous avons besoin d'un langage côté serveur pour communiquer avec le client.

// var_dump($_GET);

$retour = array();

if (isset($_GET['ville']) && $_GET['ville'] == 'Paris') {
	$retour['meteo'] = "Aujourd'hui il fait beau";
	$retour['temperature'] = '20°C'; // on peut ajouter plusieurs indices dans notre array qui correspondront à plusieurs propriétés dans l'objet JSON retourné vers le client.

	echo json_encode($retour);  
}