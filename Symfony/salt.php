

<?php 

$salt = time() . rand(1, 99999) . 'tintinautibet';
$salt_crypte = md5($salt);

$mdp = '123456' . $salt_crypte;
echo 'Mdp : ' . $mdp . '<br/>';

$mdp_crypte = md5($mdp);
echo 'Mdp crypté : ' . $mdp_crypte . '<br/>';


echo '<br/>'; 

$salt2 = time() . rand(1, 99999) . 'tintinautibet';
$salt2_crypte = md5($salt2);
$mdp2 = 'Soleil' . $salt2_crypte;
echo 'Mdp2 : ' . $mdp2 . '<br/>';

$mdp2_crypte = md5($mdp2);
echo 'Mdp2 crypté : ' . $mdp2_crypte . '<br/>';