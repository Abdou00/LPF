<?php

function debug($param) {
    echo '<pre>';
        var_dump($param);
    echo '</pre>';
}

//------------------------ FONCTIONS MEMBRES ----------------------
// fonction m'indique si l'internaute est connecté :
function internauteEstConnecte() {
    if (isset($_SESSION['membre'])) {
        return true;  // si l'indice "membre" existe dans la session, c'est que l'internaute est passé par le formulaire de connexion avec le bon login/mdp. On retourne donc "true"
    } else {
        return false; // dans le cas contraire (il n'est pas connecté) on retourne false
    }
    // ou :
    return (isset($_SESSION['membre']));
}


// fonction qui indique si le membre est un administrateur et est connecté :
function internauteEstConnecteEtAdmin() {
    if (internauteEstConnecte() && $_SESSION['membre']['statut'] == 1) {
        return true;
    } else {
        return false;
    }
}


//-------------------- FONCTION DE REQUETE -------------------
function executeRequete($requete, $param = array()) {

    if (!empty($param)) {   // si j'ai bien reçu un array rempli, je peux faire la foreach dessus pour transformer les caractères spéciaux en entités HTML : 
        foreach($param as $indice => $valeur) {
            $param[$indice] = htmlspecialchars($valeur, ENT_QUOTES);  // pour éviter les injections CSS etJS            
        }
    }

    global $pdo; // permet d'avoir accès (à l'intérieur de la fonction) à la variable $pdo définie dans l'espace global (à l'extérieur de la fonction) 

    $resultat = $pdo->prepare($requete);  // on prépare la requête fournie lors de l'appel de la fonction
    $resultat->execute($param);  // on exécute en liant les marqueurs aux valeurs qui se trouvent dans l'array $param fourni lors de l'appel de la fonction

    return $resultat;  // on retourne l'objet PDOStatement à l'endroit où la fonction executeRequete est appelée

}