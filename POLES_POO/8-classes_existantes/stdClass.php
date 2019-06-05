<?php

$tab = array('orange', 'fraise', 'poire');

$objet1 = (object) $tab; //transformation (cast)

var_dump($objet1);

echo '<br>';
//Un objet fait partis de la STDCLASS (classe standard de php) lorsque celui-ci est 'orphelin' et n'a pas été instancié par "new".

$objet2 = new StdClass();
$objet2->titre = 'PoleS';

var_dump($objet2);

echo $objet2->titre;








