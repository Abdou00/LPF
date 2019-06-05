<?
-> CREATE DATABASE magasin;
-> USE magasin;
-> CREATE TABLE produit (
		nom_produit VARCHAR(50),
		categorie_produit VARCHAR(50),
		reference_produit VARCHAR(50),
		prix_produit FLOAT,
		stock_produit INT(3),
		date_ajout DATETIME
	);
-> INSERT INTO produit(nom_produit, categorie_produit, reference_produit, prix_produit, stock_produit, date_ajout) VALUES ('Produit6', 'catégorie6', 'référence6', 50.90, 500, '01/01/2010'), ('Produit7', 'catégorie7', 'référence7', 50.90, 500, '02/02/2011'), ('Produit8', 'catégorie8', 'référence8', 50.90, 500, '03/01/2012-12:00:00'), ('Produit9', 'catégorie9', 'référence9', 52.90, 850, '03/11/2015-12:23:17'), ('Produit10', 'catégorie10', 'référence10', 50.90, 500, '03/01/2012-12:00:00');
-> SELECT * FROM produit ORDER BY date_ajout DESC;
-> SELECT * FROM produit LIMIT 10;
-> SELECT * FROM produit LIMIT 2, 12;
-> SELECT * FROM produit WHERE date_ajout BETWEEN '2014-01-01' AND '2016-12-31';
-> SELECT * FROM produit LIMIT 3, 9;
-> SELECT * FROM produit WHERE nom_produit LIKE 'a%';