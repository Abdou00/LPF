<?php

$pseudo = 'pseudo';
$mdp = "soleil";

// hashage
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
// $mdp = md5($mdp);
echo $mdp;

$verif_mdp = 'soleil';

if(password_verify($verif_mdp, $mdp)) {
	echo '<br>OK';
} else {
	echo '<br>NOK';
}

