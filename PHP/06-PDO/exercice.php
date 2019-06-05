<?php

echo '<h1>Les commerciaux et leur salaire</h1>';

// Exercice :
/* 
    - Afficher dans une liste <ul><li> : le prénom, le nom et le salaire des employés du service commercial (1 commercial par <li>). Pour cela, vous utilisez une requête préparée.
    - Afficher le nombre de commerciaux dans l'entreprise.
*/
// 1- Connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=societe',  
               'root',   
               '',      
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
); 

// 2- Requête (préparée) :
$service = 'commercial';

$resultat = $pdo->prepare("SELECT prenom, nom, salaire FROM employes WHERE service = :service ");
$resultat->bindParam(':service', $service);
$resultat->execute();

echo '<ul>';
    while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo '<li>' . $donnees['prenom'] . ' ' . $donnees['nom'] . ' gagne ' . $donnees['salaire'] . ' euros. </li>';
    }
echo '</ul>';

echo "Le nombre de commerciaux de l'entreprise est : " . $resultat->rowCount();

// echo '<pre>';print_r(get_class_methods($resultat));
// var_dump($resultat);