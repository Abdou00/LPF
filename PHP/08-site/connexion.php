<?php
require_once 'inc/init.inc.php';
$message_deconnexion = '';

// 2- Déconnexion de l'internaute :
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {  // si on reçoit en GET dans l'url l'indice "action" et la valeur "deconnexion", c'est que le membre veut se déconnecter

    unset($_SESSION['membre']);   // on supprime les infos du membre dans la session
    $message_deconnexion .= '<div class="alert alert-info">Vous êtes déconnecté.</div>';
}


// 3- L'internaute connecté est redirigé vers son profil : il n'y a pas de raison qu'il puisse se reconnecter une seconde fois :
if (internauteEstConnecte()) {
    header('location:profil.php');
    exit();
}


// 1- Traitement du formulaire de connexion :
debug($_POST);

if ($_POST) {
    // contrôles sur le formulaire :
    if (empty($_POST['pseudo'])) {  // empty vérifie si c'est vide (0, NULL, '', false ou non défini)
        $contenu .= '<div class="alert alert-danger">Le pseudo est requis.</div>';
    } 
    
    if (empty($_POST['mdp'])) {  // empty vérifie si c'est vide (0, NULL, '', false ou non défini)
        $contenu .= '<div class="alert alert-danger">Le mot de passe est requis.</div>';
    }

    if (empty($contenu)) { // si $contenu, c'est qu'il n'y a pas d'erreur sur le formulaire : on peut donc interroger la BDD

        $resultat = executeRequete("SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp", array(':pseudo' => $_POST['pseudo'], ':mdp' => $_POST['mdp']));

        if ($resultat->rowCount() > 0) { // s'il y a 1 (ou plusieurs) lignes dans $resultat, le pseudo et le mpd existent pour le même membre
            $membre = $resultat->fetch(PDO::FETCH_ASSOC);  // pas de while car il n'y a qu'une seule ligne de résultat dans la requête (les pseudos sont uniques)
            
            $_SESSION['membre'] = $membre;  // nous créons une session appelée "membre" qui contient les informations provenant de la BDD

            header('location:profil.php');  // on redirige (redirection) l'internaute vers la page située à l'url "profil.php"
            exit(); // et on quitte le script 

        } else {
            // sinon il n'y a pas de correspondance entre le login et le mdp pour le même membre :
            $contenu .= '<div class="alert alert-danger">Erreur sur les identifiants.</div>';
        }

    }  // fin du  if (empty($contenu))

}  // fin du if ($_POST)
    



//---------------------- AFFICHAGE --------------------
require_once 'inc/haut.inc.php';
?>
<h1 class="mt-4">Connexion</h1>

<?php echo $message_deconnexion; ?>

<p>Veuillez indiquer vos identifiants pour vous connecter.</p>

<?php echo $contenu; ?>

<form method="post" action="">

    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo"><br><br>

    <label for="mdp">Mot de passe</label><br>
    <input type="password" id="mdp" name="mdp"><br><br>

    <input type="submit" value="Se connecter" class="btn">

</form>

<?php
require_once 'inc/bas.inc.php';