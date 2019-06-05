<?php
// Exercice :
/* 
    1- Vous créez une page "profil" avec un nom et un prénom dans ce fichier exercice.php.
    2- Vous y ajoutez 1 lien "modifier mon profil". Ce lien passe dans l'url à la page exercice.php elle-même que l'action demandée est la modification du compte.
    3- Si la modification est demandée, c'est-à-dire que vous avez reçu cette info en GET, vous affichez "Vous avez demandé la modification de votre profil !".
*/
// Traitement PHP :
//print_r($_GET);
$message = '';

if (isset($_GET['action']) && $_GET['action'] == 'modification' ) {
    $message = '<p>Vous avez demandé la modification de votre profil !</p>';    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
    <?php 
        echo $message;
    ?>
    <p>Nom : Doe</p>
    <p>Prénom : John</p>

    <a href="?action=modification">modifier mon profil</a>
    <a href="?action=suppression">supprimer mon profil</a>

</body>
</html>