<?php 

include "Vehicule.php"; 

$v1 = new Vehicule; 

$v1 -> setMarque('Mercedes');
$v1 -> setModele('GLE');
$v1 -> setAnnee('2018');
$v1 -> setCouleur('noir');
$v1 -> setKm(154000);

$vehicule1 = $v1 -> getInfos(); 

echo '<h3>Véhicule 1 :</h3>'; 
echo '<ul>';
echo '<li>Marque : ' . $vehicule1['marque'] . '</li>';
echo '<li>Modele : ' . $vehicule1['modele'] . '</li>';
echo '<li>Annee : ' . $vehicule1['annee'] . '</li>';
echo '<li>Couleur : ' . $vehicule1['couleur'] . '</li>';
echo '<li>Kilométrage : ' . $vehicule1['km'] . '</li>';
echo '</ul>';



//---------------------

$v2 = new Vehicule; 

$v2 -> setMarque('Ferrari');
$v2 -> setModele('F40');
$v2 -> setAnnee('2005');
$v2 -> setCouleur('rouge');
$v2 -> setKm(35000);

$vehicule2 = $v2 -> getInfos(); 
echo '<h3>Véhicule 2 :</h3>'; 
echo '<ul>';
foreach($vehicule2 as $indice => $valeur){
	echo '<li>' . $indice . ': ' . $valeur . '</li>';	
}
echo '</ul>';


//---------------------

$v3 = new Vehicule; 

$v3 -> setMarque('Renault');
$v3 -> setModele('Zoé');
$v3 -> setAnnee('2018');
$v3 -> setCouleur('blanche');
$v3 -> setKm(5000);

$vehicule3 = $v3 -> getInfos(); 
echo '<h3>Véhicule 3 :</h3>'; 
echo '<ul>';
foreach($vehicule2 as $indice => $valeur){
	echo '<li>' . $indice . ': ' . $valeur . '</li>';	
}
echo '</ul>';

