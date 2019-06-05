<?php

// connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=ma_base_employees', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

// query
// SELECT date_format(birth_date, '%d/%m/%Y') FROM employees // date_format(date, format) pour gérer le format via le sql
$query = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 100";
$listeEmployes = $pdo->query($query);

$tab = array();
$tab['nombre'] = '<div><h2>Nombre d\'employés :  ' . $listeEmployes->rowCount() . '</h2><hr></div>';
$tab['contenu'] = '';

while($employe = $listeEmployes->fetch(PDO::FETCH_ASSOC)) {
	$tab['contenu'] .= '<div class="block">';
	foreach($employe AS $indice => $valeur) {
		if($indice == 'gender') {
			$tab['contenu'] .=  ($valeur == 'M') ? 'Sexe: Masculin<br>' : 'Sexe: Feminin<br>';
		} elseif ($indice == 'birth_date' || $indice == 'hire_date') {
			$dateFormat = new DateTime($valeur);
			$tab['contenu'] .=  ucfirst($indice) . ': ' . $dateFormat->format('d/m/Y') . '<br>';
		} else {
			$tab['contenu'] .=  ucfirst($indice) . ': ' . $valeur . '<br>';
		}
	}
	$tab['contenu'] .= '</div>';
}
echo json_encode($tab);



