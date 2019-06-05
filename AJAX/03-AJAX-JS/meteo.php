<?php
// En AJAX, nous avons besoin d'un langage côté serveur pour communiquer avec le client.

// var_dump($_GET);

$retour = array();

if (isset($_GET['ville']) && $_GET['ville'] == 'Paris') {
	$retour['meteo'] = "Aujourd'hui il fait beau.";

	echo json_encode($retour);  // json_encode() permet d'encoder un array en JSON puis echo l'envoie au navigateur. Attention à ne pas faire d'affichage dans ce script qui comporte un json_encode, qui ferait dysfonctionner l'échange en AJAX. L'indice "meteo" de l'array $retour va devenir la propriété "meteo" dans l'objet JSON réceptionné par r.responseText côté javaScript.
}