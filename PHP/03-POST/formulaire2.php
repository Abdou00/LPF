<?php

// Exercice :
//    - créer un formulaire avec les champs ville, code postal et une zone de texte adresse.
//    - vous afficher les données saisies par l'internaute dans la page formulaire2-traitement.php.

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrulaire 2</title>
</head>
<body>
    <h1>Formulaire 2</h1>
    <form method="post" action="formulaire2-traitement.php">
        <label for="ville">Ville</label><br>
        <input type="text" id="ville" name="ville">
        <br>

        <label for="cp">Code postal</label><br>
        <input type="text" id="cp" name="cp">
        <br>

        <label for="adresse">Adresse</label><br>
        <textarea name="adresse" id="adresse" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" value="envoyer">

    </form>

</body>
</html>