<?php
//---------------------------
// La superglobale $_SESSION
//---------------------------
/* Un fichier temporaire appelé session est créé sur le serveur avec un identifiant unique. Cette session est liée à un seul internaute car, dans le même temps, un cookie est déposé sur son poste avec l'identifiant à l'intérieur (au nom PHPSESSID). Ce cookie se détruit lorsqu'on quitte le navigateur.

Le fichier de session peut contenir toutes sortes d'informations, y compris sensibles, car il n'est pas accesible ni modifiable par l'internaute. On peut donc y mettre des logins/mdp, paniers d'achat avant paiement, ...

Si l'internaute tente de modifier ce cookie, le lien avec la session est rompu automatiquement, et donc l'internaute est déconnecté.

Les données du fichier session sont accessibles et manipulables à partir de la superglobale $_SESSION.
*/

// Ouverture ou création d'une session :
session_start();    // permet de créer une session si elle n'existe pas, ou de l'ouvrir si elle existe déjà (on a reçu un cookie avec l'ID de session à l'intérieur)


// Remplissage de la session :
$_SESSION['pseudo'] = 'Tintin';
$_SESSION['mdp'] = 'milou';  // $_SESSION étant un array, on utilise la syntaxe avec []

echo '<br> 1-La session après remplissage : ';
print_r($_SESSION);

// Pour visualiser le fichier de session : xampp > tmp

// Vider une partie de la session :
unset($_SESSION['mdp']);     // supprime l'incide "mdp" et la valeur correspondante

echo '<br> 2- La session après suppression du mdp : ';
print_r($_SESSION);


// Supprimer entièrement une session :
// session_destroy();  // on demande la suppression de la session, mais il faut savoir que le session_destroy() est dabord lu, puis exécuter seulement à la fin du script

echo '<br> 3- La session après session_destroy() : ';
print_r($_SESSION);  // on voit encore notre session, car la fin du script se situe après cette ligne. Cependant, si on regarde dans le dossier tmp, la session est bien supprimée 



