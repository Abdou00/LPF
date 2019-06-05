<?php

// 
if(isset($_POST['pays']) && strtolower($_POST['pays']) == 'france') {

	echo '<option>Paris</option><option>Marseille</option><option>Lyon</option><option>Montpellier</option><option>Lille</option><option>Bordeaux</option>';

} elseif (isset($_POST['pays']) && strtolower($_POST['pays']) == 'angleterre') {

	echo '<option>Londre</option><option>Manchester</option><option>Bristol</option><option>Newcastle</option><option>Liverpool</option>';

} elseif (isset($_POST['pays']) && strtolower($_POST['pays']) == 'espagne') {

	echo '<option>Madrid</option><option>Barcelone</option><option>Valence</option><option>Seville</option><option>Bilbao</option>';

} else {
	echo '<option>Veuillez choisir un pays...</option>';
}