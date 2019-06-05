<style type="text/css">
	div{
		background: #eee;
		margin: 5px;
		padding: 5px;
	}
</style>

<?php
//PDO : Php Data Object
/* --------------------------------------------------------
Exec() : 
	INSERT, UPDATE, DELETE : Exec() est utilisé pour la formulatio de requête ne retournant pas de résultat.
							Exec() renvoie le nombre de lignes affectées par la requête.

	Valeur retour :
		Echec : False (BOOLEAN)
		Succes : 1 (INT). Ce nombre peut bien evidemment etre suépérieur tout dépend du nombre d'enregistrements affectés par la requête.
--------------------------------------------------------
Query() :
	SELECT : Au contraire de Exec(), Query() est utilisé pour la formulation de requête retournant un ou plusieurs résultats.
	Valeur de retour :
		Echec : False (BOOLEAN)
		Succes : PDOStatement (Object)
--------------------------------------------------------
Prepare() -> Execute() : 
	INSERT, UPDATE, DELETE, SELECT : prepare() permet de préparer une requête mais ne l'exécute pas.
									execute() permet d'exécuter une requête préparée.
	Cette méthode est à préconiser si l'on exécute plusieurs fois la même requête et ainsi vouloir éviter le cycle : analyse / interprétation /exécution.
	Valeur de retour: 
		Prepare() renvoie TOUJOURS un PDOStatement (object)
		Execute() :
			Echec : False (BOOLEAN)
			Succes : PDOStatement (object)
--------------------------------------------------------
Toutes ces méthodes peuvent prendre un ou des arguments si nécessaire.
SAUF pour Exec() : $pdo représente mon objet PDO, quand j'execute une requête PDO, il me retourne un objet PDOStatement (qui n'est donc plus l'objet PDO .. !!!)

Permet d'afficher les erreurs et la requête après exécution: 
	Pour Exec() ou Query() :
		print '<pre>';
			print_r( $pdo->errorInfo() ); //sur l'objet PDO
		print '</pre>';
	Pour prepare() puis execute() :
		print_r( $resultat->errorInfo() ); //sur l'objet PDOStatement

Il est interessant d'utiliser Query ou Exec pour les requêtes en dur et d'utiliser prepare + execute pour les requêtes dynamiques (incluant du post , get, etc..)
-------------------------------------------------------- */
$pdo = new PDO('mysql:host=localhost;dbname=entreprise_pole_S', 'root', '', array( PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ) );

// var_dump($pdo);

// print '<pre>';
// 	print_r( get_class_methods($pdo) );
// print '</pre>';

//-------------------------------------------------------
echo '<h1>SELECT  + Query() + fetch()</h1>';

$r = $pdo->query('SELECT * FROM employes'); //$resultat : PDOStatement

//var_dump($r); 

// print '<pre>';
// 	print_r( get_class_methods($r) ); //permet d'afficher les methodes de la classe PDOStatement
// print '</pre><hr>';

// print '<pre>';
// 	print_r( get_object_vars($r) ); //permet d'afficher les propriétés de la classe PDOStatement
// print '</pre>';

$donnees = $r->fetch(); //ou fetch(PDO::FETCH_ASSOC);

// print '<pre>';
// 	print_r( $donnees ); 
// print '</pre>';
foreach($donnees as $indice => $contenu){

	echo $indice . ' - > ' . $contenu . '<br>';
}
//fetch() ressort la première ligne de resultat et nous effectuons une boucle dessus pour afficher toutes les valeurs de chaque champs sur cette meme ligne.
//-------------------------------------------------------
echo '<hr><h1>SELECT  + fetch() ne renvoie pas un seul resultat si il est dans une boucle</h1>';

$r = $pdo->query('SELECT * FROM employes'); //$resultat : PDOStatement

while( $contenu = $r->fetch() ){
//A chaque tour de boucle, je lis le resultat suivant dans la table suite à ma requête

	echo '<div>';
		echo $contenu['id_employes'] . '<br>';
		echo $contenu['prenom'] . '<br>';
		echo $contenu['nom'] . '<br>';
		echo $contenu['sexe'] . '<br>';
		echo $contenu['service'] . '<br>';
		echo $contenu['date_embauche'] . '<br>';
		echo $contenu['salaire'] . '<br>';
	echo '</div>';
}
//---------------------------------------------------------
echo '<hr><h1>SELECT + Query() + fetchAll() et PDO::FETCH_ASSOC </h1>';

$r = $pdo->query('SELECT * FROM employes');

$donnees = $r->fetchAll(PDO::FETCH_ASSOC); //fetchAll() retourne toutes les lignes de résultats dans un tableau multidimentionnel (sans faire de boucle)

// print '<pre>';
// 	print_r( $donnees ); 
// print '</pre>';
echo '<h2>FOREACH</h2>';
foreach( $donnees as $indice => $contenu ){

	echo '<div>';
		foreach($contenu as $indice2 => $contenu2){

			echo "$indice2". " : " . "$contenu2 <br>";
		}
	echo '</div>';
}
//------------------------------------------------------
echo '<h2>FOR</h2>';
for($i = 0 ; $i < count($donnees); $i++){

	echo '<div>';
		echo $donnees[$i]['id_employes'] . '<br>';
		echo $donnees[$i]['prenom'] . '<br>';
		echo $donnees[$i]['nom'] . '<br>';
		echo $donnees[$i]['sexe'] . '<br>';
		echo $donnees[$i]['service'] . '<br>';
		echo $donnees[$i]['date_embauche'] . '<br>';
		echo $donnees[$i]['salaire'] . '<br>';
	echo '</div>';
}
//------------------------------------------------------
echo '<h2>WHILE</h2>';
$i = 0;
while($i < count($donnees) ){
	echo '<div>';
		echo $donnees[$i]['id_employes'] . '<br>';
		echo $donnees[$i]['prenom'] . '<br>';
		echo $donnees[$i]['nom'] . '<br>';
		echo $donnees[$i]['sexe'] . '<br>';
		echo $donnees[$i]['service'] . '<br>';
		echo $donnees[$i]['date_embauche'] . '<br>';
		echo $donnees[$i]['salaire'] . '<br>';
	echo '</div>';
	$i++;
}
//----------------------------------------------------------------------------------------------
echo '<hr><h1>SELECT + Query() + fetchAll() + ColumnCount() </h1>';

$resultat = $pdo->query('SELECT * FROM employes', PDO::FETCH_ASSOC); //Ici, on demande d'indéxer numériquement quand c'est toujours au stade 'd'objet'.

echo '<table border="1"><tr>';
	for($i=0; $i<$resultat->columnCount(); $i++ ){ //columnCount() (methode de PDOStatement) permet de compter le nombre de colonnes de ma table

			$colonne = $resultat->getColumnMeta($i); //getColumnMeta() (methode de PDOStatement) permet de récupérer les infos sur les champs de la table
			echo '<th>'. $colonne['name'] .'</th>';

	}
	echo '</tr>';
	foreach($resultat as $contenu){
		echo '<tr align="center">';
		foreach($contenu as $indice => $info){

			echo '<td>'. $info .'</td>';
		}
		echo '</tr>';
	}
echo '</table>';
//----------------------------------------------------------------------------------------------
echo '<hr><h1>Arg Array + prepare() + execute() + fetch() </h1>';

$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = ? '); //On rpépare notre requête, ici, le '?' est un marqueur

$resultat->execute( array("durand") ); // "Durand" va remplacer mon marqueur ('?')

print '<pre>';
	print_r( $resultat->errorInfo() ); //Si je fais une erreur sur prepare() ou execute() on demande l'erreur via l'objet PDOStatement 
print '</pre>';
//var_dump($resultat);

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
var_dump($donnees);
echo'<br>';
//----------------------------------------------------------------------------------------------------
$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom '); // :nom est un marqueur

$resultat->execute( array('nom' => 'chevel') );

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
var_dump($donnees);

//----------------------------------------------------------------------------------------------
echo '<hr><h1>Arg bindParam() + prepare() + execute() + fetch() </h1>';

$nom = 'sennard';

$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom '); // :nom est un marqueur

$resultat->bindParam( ':nom', $nom, PDO::PARAM_STR ); //on précise que bindParam doit recevoir exclusivement une variable
$resultat->execute();

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
var_dump($donnees);

//----------------------------------------------------------------------------------------------
echo '<hr><h1>Arg bindValue() + prepare() + execute() + fetch() </h1>';

//$nom = 'Thoyer';

$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom '); // :nom est un marqueur
//$resultat->bindValue( ':nom', $nom, PDO::PARAM_STR ); //on précise que bindValue peut recevoir une variable ou une chaine de caractères
$resultat->bindValue( ':nom', 'Thoyer', PDO::PARAM_STR ); //on précise que bindValue peut recevoir une variable ou une chaine de caractères
$resultat->execute();

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
var_dump($donnees);

//----------------------------------------------------------------------------------------------
echo '<hr><h1>Arg bindValue() + prepare() + execute() + fetch() + PDO::FETCH_OBJ </h1>';

$nom = 'perrin';

$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :name '); // :name est un marqueur
$resultat->bindValue( ':name', $nom ); 

$resultat->execute();

echo '<ul>';
	$donnees = $resultat->fetch(PDO::FETCH_OBJ); // PDO::FETCH_OBJ : retourne des objets
	print '<pre>';
		print_r($donnees);
	print '</pre>';
	echo $donnees->prenom;
echo '</ul>';
//----------------------------------------------------------------------------------------------
echo '<hr><h1>Plusieurs exécution d\'une meme requête</h1>';

// $pdostatement = $pdo->prepare("INSERT INTO employes(prenom, nom,sexe, service, date_embauche,salaire) VALUES ('test','test','m','test', '2012-01-01', 1111)");

// for($i = 0; $i < 3; $i++ ){

// 	$pdostatement->execute();
// }
//----------------------------------------------------------------------------------------------
echo '<hr><h1> Transaction + requete et annulation </h1>';
//ATTENTION : si la transaction ne passe pas, il faut supprimer la bdd 'entreprise_pole_s'

	$pdo->beginTransaction(); // Démarre une transaction (desactivé l'auto-commit)

	$resultat = $pdo->query('SELECT * FROM employes', PDO::FETCH_NUM);

	echo '<table border="1"> <tr> ' ;
		for($i=0; $i < $resultat->columnCount(); $i++){

			$colonne = $resultat->getColumnMeta($i);
			echo '<th>' . $colonne['name'] . '</th>';
		}
		foreach($resultat as $contenu){
			echo '<tr>';
				foreach($contenu as $indice => $info){

					echo '<td>'. $info .'</td>';
				}
			echo '</tr>';
		}
	echo '</table>';

	var_dump($pdo->inTransaction() ); //renvoie true si nous sommes dans une transaction à cet instant précis, sinon false.

	//Si on s'apercoit que l'on a fait une erreur et que l'on veut annuler une modification:
	$pdo->rollBack();

//----------------------------------------------------------------------------------------------
echo '<hr><h1> FETCH_CLASS </h1>';

	class Employes{

		public $id_employes;
		public $prenom;
		public $nom;
		public $sexe;
		public $service;
		public $date_embauche;
		public $salaire;
	}

$r = $pdo->query('SELECT * FROM employes');

$objet = $r->fetchAll(PDO::FETCH_CLASS, 'Employes');

foreach ($objet as $employe) {
	
	echo $employe->prenom . '<br>';
}


























?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>