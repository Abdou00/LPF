
<?php

require('Etudiants.php');


$etudiant1 = new Etudiant; 
$etudiant1 
	-> setPrenom('Sabuj') 
	-> setNom('Barua') 
	-> setEmail('sabuj.barua@gmail.com') 
	-> setTelephone('0102030102');  
	
$etudiant2 = new Etudiant; 
$etudiant2 
	-> setPrenom('Elies') 
	-> setNom('KEDIM') 
	-> setEmail('barbarek@gmail.com') 
	-> setTelephone('0102030103'); 	
	
$etudiant3 = new Etudiant; 
$etudiant3
	-> setPrenom('Kevin') 
	-> setNom('JOUAN') 
	-> setEmail('kevin.jouan@gmail.com') 
	-> setTelephone('0102030104'); 	
	
	
echo '<h1>Etudiant 1</h1>';
$e1 = $etudiant1 -> getInfos();
foreach($e1 as $indice => $valeur){
	echo $indice . ' : <b>' . $valeur .'</b><br/>';
}

echo '<h1>Etudiant 2</h1>';
$e2 = $etudiant2 -> getInfos();
foreach($e2 as $indice => $valeur){
	echo $indice . ' : <b>' . $valeur .'</b><br/>';
}

echo '<h1>Etudiant 3</h1>';
$e3 = $etudiant3 -> getInfos();
foreach($e3 as $indice => $valeur){
	echo $indice . ' : <b>' . $valeur .'</b><br/>';
}



	
	
	