<?php
function recherche($tab, $element){

	if( !is_array($tab) ){

		die('Vous devez envoyer un Array !'); //die() permet d'arreter les traitements
	}
	$position = array_search($element, $tab);
	return $position;
}
//------------------------------------------------------------------------
$liste = array('orange', 'fraise', 'pomme');

	echo recherche($liste, 'fraise') . '<br>'; //affiche 1 (ici, la position de 'fraise' dans mon tableau $liste)

	echo recherche('tableau', 'fraise') . '<br>';

	echo 'Traitements php.... ';
