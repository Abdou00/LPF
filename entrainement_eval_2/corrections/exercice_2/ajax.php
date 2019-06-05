<?php

require 'connexion.php';

$resultat = $pdo -> query("SELECT * FROM produit");

$tab['resultat'] = '';

while($produit = $resultat -> fetch(PDO::FETCH_ASSOC)){
	
	$tab['resultat'] .= '<tr>';
	$tab['resultat'] .= '<td>' . $produit['id_produit'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['reference'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['categorie'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['titre'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['description'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['couleur'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['taille'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['public'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['prix'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['stock'] . '</td>';
	$tab['resultat'] .= '<td><img height="50px" src="../../13-framework/web/' . $produit['photo'] . '"/></td>';
	$tab['resultat'] .= '</tr>';
	
	
	// $tab['resultat'] .= '<tr>';
	// foreach($produit as $indice => $valeur){
		// if($indice != 'photo'){
			// $tab['resultat'] .= '<td>' . $valeur . '</td>';
		// }
		// else{
			// $tab['resultat'] .= '<td><img src="' . $valeur . '"/></td>';
		// }
	// }
	// $tab['resultat'] .= '</tr>';
	
}

echo json_encode($tab);

