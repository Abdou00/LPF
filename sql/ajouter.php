/**
 * On considère une entreprise de ventes de voitures.(database)
 * Un modèle de voiture(table) est décrit par une marque(colone), une dénomination(colone).
 
 * Une voiture(table) est identifiée par un numéro de série(colonne), et a un modèle(colonne), une couleur(colonne) et un prix affiché(colonne) et un coût(colonne) (prix auquel la voiture est revenue).

 * Des clients(table), on connaı̂t le nom(colonne), le prénom(colonne) et l’adresse(colonne). Parmi les clients, on trouve les anciens propriétaires des voitures d’occasion, ainsi que les personnes ayant acheté une voiture au magasin.
 
 * Lorsqu’une vente(table) est réalisée, on en connaı̂t le vendeur(table & colonne -> table vente) (dont on connaı̂t le nom(colonne -> table vendeur), le prénom(colonne -> table vendeur), l’adresse(colonne -> table vendeur) et le salaire fixe(colonne -> table vendeur)) et le prix d’achat réel(colonne -> table vente) (en tenant compte d’un rabais éventuel). Chaque vendeur touche une prime de 5% de la différence entre le prix d’achat affiché et le coût de la voiture.
 
 * L’entreprise est répartie sur un certain nombre de magasins(table) et chaque vendeur opère dans un magasin unique. Chaque voiture est, ou à été, stockée dans certains magasins et est vendue dans le dernier magasin où elle a été stockée. On garde trace des dates d’arrivée dans et de départ des magasins. Un transfert de voiture entre deux magasins se fait dans la journée.

--> entreprise
----> voiture
------> id, numserie, couleur, prix, cout, marque, modele, nomp?, prenomp?
create table voiture (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	numserie VARCHAR(100),
	couleur VARCHAR(100),
	prix INT(5),
	cout INT(5),
	marque VARCHAR(100),
	modele VARCHAR(100),
	nomp VARCHAR(100),
	prenomp VARCHAR(100)
);

----> client
------> id, numeserie, date, adresse
create table client (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	numeserie VARCHAR(100),
	date DATE,
	adresse VARCHAR(255)
);

----> vente
------> id, num, date, prixachat, numserie, noma, prenoma, nomv, prenomv
create table vente (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	num INT(5),
	date DATE,
	prixachat INT(4),
	numserie INT,
	noma VARCHAR(100),
	prenoma VARCHAR(100),
	nomv VARCHAR(100),
	prenomv VARCHAR(100)
);
----> vendeur
------> id, nom, prenom, adresse, salairefixe, magasin
create table vendeur (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100),
	prenom VARCHAR(100),
	adresse VARCHAR(100),
	salairefixe INT,
	magasin VARCHAR(100)
);
----> arrivee
------> id, numserie, date, magasin
create table arrivee (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	numserie INT(10),
	date DATE,
	magasin VARCHAR(100)
);

* 1. Donner un diagramme Entité/Association pour représenter ces données(fait)
* 2. Donner un schéma de base de données correspondant à ce diagramme(fait)
* 3. Créé la base, table(fait)
* 4. Écrire les requêtes suivantes en SQL:
	* Donner la liste des voitures (numéro) vendues après le 15 avril 2007.
	* Donner la voiture qui à rapporté le plus d'argent
	* Donner le vendeur ayant accordé le plus gros rabais.
	* Les bénéfices de chaque magasin pour le mois de janvier 2007.
	* Le meilleur client (celui ayant rapporté le plus d’argent à l’entreprise).
	* La marque pour laquelle on a accordé le plus de rabais.
*/
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=mabase;', 'samba', 'Abdoulaye@92vlg');

	/* Donner la liste des voitures (numéro) vendues après le 15 avril 2007. */
	/* Donner la voiture qui à rapporté le plus d'argent */
	/* Donner le vendeur ayant accordé le plus gros rabais. */
	/* Les bénéfices de chaque magasin pour le mois de janvier 2007. */
	/* Le meilleur client (celui ayant rapporté le plus d’argent à l’entreprise). */
	/* La marque pour laquelle on a accordé le plus de rabais. */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
</body>
</html>