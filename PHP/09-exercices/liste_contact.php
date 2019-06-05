<?php
/*
	1- Afficher dans une table HTML la liste des contacts avec les champs nom, prénom, téléphone, et un champ supplémentaire "autres infos" avec un lien qui permet d'afficher le détail de chaque contact.

	2- Afficher sous la table HTML le détail d'un contact quand on clique sur le lien "autres infos".
*/
$contenu = '';  // variable d'affichage

// Connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'));

// On sélectionne tous les contacts :
$query = $pdo->prepare("SELECT * FROM contact");
$query->execute();  // les méthodes prepare() et execute() vont toujours ensemble

// On prépare le tableau HTML :
$contenu .= '<table border="1">';
	$contenu .= '<tr>';
		$contenu .= '<th>Nom</th>';
		$contenu .= '<th>Prénom</th>';
		$contenu .= '<th>Téléphone</th>';
		$contenu .= '<th>Autres infos</th>';
	$contenu .= '</tr>';

// Tant qu'il y a un résultat dans $query, on prépare la ligne de la table HTML correspondant au contact :
while ($contact = $query->fetch(PDO::FETCH_ASSOC)) {
	/*echo '<pre>';
		print_r($contact);
	echo '</pre>';*/
	
	$contenu .= '<tr>';
		$contenu .= '<td>'. $contact['nom'] .'</td>';
		$contenu .= '<td>'. $contact['prenom'] .'</td>';
		$contenu .= '<td>'. $contact['telephone'] .'</td>';
		// lien cliquable "plus d'infos" :
		$contenu .= '<td><a href="?id_contact='. $contact['id_contact'] .'">plus d\'infos</a></td>';
	$contenu .= '</tr>';
} 
$contenu .= '</table>';

// Si on a cliqué sur un lien "plus d'infos" :
if (isset($_GET['id_contact'])) {   // si l'indice "id_contact" est dans $_GET, donc dans l'url, c'est qu'on a demandé le détail d'un contact
    // die ('ligne 43');  // on peut faire un echo ou un exit ou un die pour vérifier que l'on passe bien dans cette condition
	 
	$_GET['id_contact'] = htmlspecialchars( $_GET['id_contact'], ENT_QUOTES);  	// permet de transformer les caractères spéciaux en entités HTML pour se prémunir des risques JS (XSS) et CSS	

	// on fait une requête préparée de sélection du contact dans la BDD :
	$query = $pdo->prepare("SELECT * FROM contact WHERE id_contact = :id_contact");
	$query->bindParam(':id_contact', $_GET['id_contact']);
	$query->execute();  // avec un prepare() TOUJOURS un execute()

	// on transforme le résultat de la requête en un array associatif :
	$contact = $query->fetch(PDO::FETCH_ASSOC);   // pas de while car on certain de n'avoir qu'un seul résultat
	
	// On affiche les infos du contact :
	$contenu .= '<h2>Détail du contact</h2>';

	// var_dump($contact);

	if ($contact == false) {
		$contenu .= '<p>Ce contact n\'existe pas !</p>';	
	} else {
		$contenu .= '<ul>';
			$contenu .= '<li>'. $contact['nom'] .'</li>';
			$contenu .= '<li>'. $contact['prenom'] .'</li>';
			$contenu .= '<li>'. $contact['telephone'] .'</li>';
			$contenu .= '<li>'. $contact['email'] .'</li>';
			$contenu .= '<li>'. $contact['annee_rencontre'] .'</li>';
			$contenu .= '<li>'. $contact['type_contact'] .'</li>';
		$contenu .= '</ul>';
	}

} // fin du if (isset($_GET['id_contact']))


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Liste des contacts</title>
</head>
<body>
	<h1>Liste des contacts</h1>

	<?php echo $contenu; ?> 

</body>
</html>