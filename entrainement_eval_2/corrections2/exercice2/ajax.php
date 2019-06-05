<?php

require('connexion.php');

$resultat = $pdo -> query("SELECT * FROM produit");

$tab['resultat'] = '';
while($produit = $resultat -> fetch(PDO::FETCH_ASSOC)){
	$tab['resultat'] .= '<tr>';
	foreach($produit as $indice => $valeur){
		if($indice != 'photo'){
			$tab['resultat'] .= '<td>' . $valeur . '</td>';
		} 
		else{
			$tab['resultat'] .= '<td><img src="../../../PHP/08-site/photo/' . $valeur . '" height="80" /></td>';
		}
	}
	$tab['resultat'] .= '</tr>';
}
echo json_encode($tab);