<?php 


require 'Etudiant.class.php';

$etudiant1 = new Etudiant; 
$etudiant1 
	-> setPrenom('Yakine') 
	-> setNom('Hamida')
	-> setEmail('yakine.hamida@evogue.fr')
	-> setTelephone('0102030405');
$e1 = $etudiant1 -> getInfos();
//------
$etudiant2 = new Etudiant; 
$etudiant2 
	-> setPrenom('totoo') 
	-> setNom('tataa')
	-> setEmail('toto.tata@gmail.com')
	-> setTelephone('0102030405');
$e2 = $etudiant2 -> getInfos();
//------
$etudiant3 = new Etudiant; 	
$etudiant3 -> setPrenom('Yapii');
$etudiant3 -> setNom('Yapoo');
$etudiant3 -> setEmail('yapi.yapo@gmail.com');
$etudiant3 -> setTelephone('0102030405');
$e3 = $etudiant3 -> getInfos();
//------------
//$e1, $e2, $e3 des array avec les infos de chaque étudiant. 

?>

<h2>Etudiant 1 : <?= $e1['prenom'] ?></h2>
Prénom : <?= $e1['prenom'] ?> <br/>
Nom : <?= $e1['nom'] ?> <br/>
Email : <?= $e1['email'] ?> <br/>
Téléphone : <?= $e1['telephone'] ?> <hr/>

<h2>Etudiant 2 : <?= $e2['prenom'] ?></h2>
Prénom : <?= $e2['prenom'] ?> <br/>
Nom : <?= $e2['nom'] ?> <br/>
Email : <?= $e2['email'] ?> <br/>
Téléphone : <?= $e2['telephone'] ?> <hr/>

<h2>Etudiant 3 : <?= $e3['prenom'] ?></h2>
Prénom : <?= $e3['prenom'] ?> <br/>
Nom : <?= $e3['nom'] ?> <br/>
Email : <?= $e3['email'] ?> <br/>
Téléphone : <?= $e3['telephone'] ?> <hr/>

