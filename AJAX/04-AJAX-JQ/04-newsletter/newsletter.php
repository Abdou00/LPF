<?php

$retour = ''; // dans ce script on retourne un string qui contient du HTML.

// connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=newsletter', 
			   'root',
			   '',
			   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if (!empty($_POST['inscription'])) { 
	// si le champ email n'est pas vide :


} else {
	// si le champ email est vide :
	$retour = '<span style="color: red;">Veuillez remplir votre email !</span>';
}

echo $retour;  // pas de json_encode() ici car on envoie un string contenant du HTML directement, etnon pas un objet JSON.