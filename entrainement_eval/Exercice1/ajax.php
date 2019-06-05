<?php 

//1 : Se connecter à la BDD entreprise_pole_s
include "connexion.php";

//2 : Récupérer les données transmise par le JS
extract($_POST);
 
//3 : Effectuer une requete (INSERT)
$resultat = $pdo -> prepare("INSERT INTO employes (prenom, nom, service, sexe, date_embauche, salaire)  VALUES (:prenom, :nom, :service, :sexe, CURDATE(), :salaire)");

$resultat -> bindParam(':prenom', $prenom, PDO::PARAM_STR);
$resultat -> bindParam(':nom', $nom, PDO::PARAM_STR);
$resultat -> bindParam(':service', $service, PDO::PARAM_STR);
$resultat -> bindParam(':sexe', $sexe, PDO::PARAM_STR);
$resultat -> bindParam(':salaire', $salaire, PDO::PARAM_INT);

if($resultat -> execute()){
	// Si la requête retourne TRUE : Tout va bien
	$reponse['validation'] = "OK";
}
else{
	$reponse['validation'] = "ERREUR"; 
}


//4 : Retourner une réponse
echo json_encode($reponse);

