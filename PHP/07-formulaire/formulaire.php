<?php
//---------------------------
// Validation de formulaire
//---------------------------
// Créer un formulaire qui permet d'enregistrer un nouvel employé dans le BDD societe.

$message = '';  // variable pour afficher les messages d'erreur

// 2- connexion :
$pdo = new PDO('mysql:host=localhost;dbname=societe',  
               'root',   
               '',      
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);

// 3- Traitement de $_POST :
if ($_POST) {   // est équivalent à !empty($_POST) 

    print_r($_POST);

    // Contrôles du formulaire :
    if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 3 || strlen($_POST['prenom']) > 20) $message .= '<p>Le prénom doit comporter entre 3 et 20 caractères.</p>';   // si n'existe pas l'indice "prenom", c'est que le name correspondant a été modifié... on vérifie aussi la longueur du prenom
    
    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 3 || strlen($_POST['nom']) > 20) $message .= '<p>Le nom doit comporter entre 3 et 20 caractères.</p>';

    if (!isset($_POST['service']) || strlen($_POST['service']) < 3 || strlen($_POST['service']) > 30) $message .= '<p>Le service doit comporter entre 3 et 30 caractères.</p>';    

    if (!isset($_POST['sexe']) || ($_POST['sexe'] != 'm' && $_POST['sexe'] != 'f')) $message .= '<p>Le sexe n\'est pas valide.</p>';   

    if (!isset($_POST['date_embauche']) || !strtotime($_POST['date_embauche'])) $message .= '<p>La  date n\'est pas valide.</p>'; // strtotime() renvoie false si le timestamp de la date fournie ne peut pas être obtenu, autrement dit si la date n'est pas réputée valide
    
    if (!isset($_POST['salaire']) || !is_numeric($_POST['salaire']) || $_POST['salaire'] <= 0 )  $message .= '<p>Le salaire doit être un nombre positif.</p>';   // is_numeric() verifie si la variable est un nombre ou bien une chaîne numérique (un nombre en string)


    //-----
    // Si la variable $message est vide, c'est que le formulaire est valide : on peut enregistrer en BDD :
    if (empty($message)) {

        // on échappe toutes les valeurs de $_POST :
        foreach ($_POST as $indice => $valeur) {
            $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);  // on prend la valeur que l'on traite avec htmlspecialchars() puis que l'on range dans son emplacement initial qui est $_POST[$indice]
        }

        // on reformate la date en yyyy-mm-dd :
        $date = new DateTime($_POST['date_embauche']);  // on crée un objet date qui contient la date d'embauche à partir de la classe DateTime
        $date_embauche = $date->format('Y-m-d');  // on utilise la méthode format() pour changer le format de la date
        var_dump($date_embauche);

        // La requête préparée :
        $resultat = $pdo->prepare("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)");
        
        $resultat->bindParam(':prenom', $_POST['prenom']);
        $resultat->bindParam(':nom', $_POST['nom']);
        $resultat->bindParam(':sexe', $_POST['sexe']);
        $resultat->bindParam(':service', $_POST['service']);
        $resultat->bindParam(':date_embauche', $date_embauche);
        $resultat->bindParam(':salaire', $_POST['salaire']);    

        $req = $resultat->execute();  // $req est un booléen : true en cas de succès de la requête, sinon false en cas d'échec

        // Message de réussite ou d'échec de l'enregistrement :
        if ($req) {
            $message .= '<p style="background: green">L\'employé a bien été ajouté.</p>';
        } else {
            $message .= '<p style="background: red">Erreur lors de l\'enregistrement.</p>';
        }    

    }  // fin du if (empty($message))   
   
}  // fin du if ($_POST)










// 1- le formulaire HTML :
echo $message;
?>
<form method="post" action="">
    <label for="prenom">Prénom</label><br>
    <input type="text" id="prenom" name="prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>"><br>

    <label for="nom">Nom</label><br>
    <input type="text" id="nom" name="nom" value="<?php echo $_POST['nom'] ?? ''; ?>"><br>

    <label>Sexe</label><br>
    <input type="radio" name="sexe" value="m" checked> Homme
    <input type="radio" name="sexe" value="f" <?php if (isset($_POST['sexe']) && $_POST['sexe'] == 'f') echo 'checked'; ?> > Femme
    <br>

    <label for="service">Service</label><br>
    <input type="text" id="service" name="service" value="<?php echo $_POST['service'] ?? ''; ?>"><br>

    <label for="date_embauche">Date d'embauche</label><br>
    <input type="text" id="date_embauche" name="date_embauche" value="<?php echo $_POST['date_embauche'] ?? ''; ?>" placeholder="jj-mm-aaaa"><br>

    <label for="salaire">Salaire</label><br>
    <input type="text" id="salaire" name="salaire" value="<?php echo $_POST['salaire'] ?? ''; ?>"><br>

    <input type="submit" value="enregistrer">

</form>

