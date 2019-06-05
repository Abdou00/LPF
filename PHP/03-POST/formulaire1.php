<?php
//-----------------------
// La superglobale $_POST
//-----------------------
// $_POST est une superglobale qui permet de récupérer les données saisies dans un formulaire.

// $_POST est une superglobale, donc un array. Il est disponible dans tous les contextes du script, y compris au sein des fonctions.

// Syntaxe de $_POST : $_POST = array('name1' => 'valeur input1', 'nameN' => 'valeur inputN');

print_r($_POST);

echo '<hr>';

if (!empty($_POST)) {  // si $_POST n'est pas vide, c'est qu'on a reçu des données du formulaire (le formulaire a été soumis)
    echo 'Prénom : ' . $_POST['prenom'] . '<br>';
    echo 'Description : ' . $_POST['description'] . '<br>';  // les indices "prenom" et "description" proviennent des names du formulaire HTML
}


// Pour réinitialiser un formulaire avec le dernier code saisi : on clique dans l'url + "entrée"
// Pour répéter la dernière action et donc renvoyer les données du formulaire : F5 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="post" action=""><!-- un formulaire doit toujours être dans des balises <form> pour fonctionner. Attribut method définit la méthode d'envoi des saisies vers le serveur. Attribut action définit l'url de destination des saisies -->
        <label for="prenom">Prénom</label><br>
        <input type="text" id="prenom" name="prenom"><!-- les names des inputs constituent les indices de l'array $_POST qui réceptionne les infos -->

        <br>

        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><!-- les id et les for sont liés : ils permettent de placer le curseur dans l'input quand on clique sur le label -->

        <br>

        <input type="submit" value="envoyer">

    </form>

</body>
</html>