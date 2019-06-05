<?php
/*
  1- Créer une fonction qui retourne la conversion d'une date FR en date US ou inversement.
  Cette fonction prend 2 paramètres : une date et le format de conversion de sortie "US" ou "FR". Pour faire cette conversion, vous utilisez la classe DateTime.
	  
  2- Vous validez que le paramètre de format est bien "US" ou "FR". La fonction retourne un message si ce n'est pas le cas.
  
  3- Vous validez que la date fournie est bien une date. La fonction retourne un message si ce n'est pas le cas.
  
*/

function afficheDate($date, $format) {
    // on contrôle d'abord les valeurs reçues :
    if ($format != 'FR' && $format != 'US') {
        return '<p>Le format demandé n\'est pas valide !</p>';  // return nous fait quitter la fonction, le reste du code qui suit n'est donc pas exécuté.
    }

    if (!strtotime($date)) {
        return '<p>La date est invalide !</p>';
    }

    // Traitement de l'affichage de la date :
    $objetDate = new DateTime($date);
    if ($format == 'FR') {
      return $objetDate->format('d-m-Y');
    } else {
      return $objetDate->format('Y-m-d');
    }
}    

echo afficheDate('2018-07-14', 'FR'); 