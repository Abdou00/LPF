<?php require_once('namespace_ab.php'); ?>

<?php
// erreur : On ne peut pas déclarer deux fonction ou deux classes avec le même nom
// function test(){};
// function test(){};
// class test{};
// class test{};

echo A\ville();echo '<br>';
echo A\strlen();
echo '<hr>';
echo B\ville();echo '<br>';
echo B\strlen();

//----------------------------------------------------------------------------
/*
Les namespace permettent de classer mes 'class'
Pratique pour classer les fonctions
Evite à plusieurs développeurs travailalnt sur un même projet de rentrer en collision lors d'un nomamge d'une méthode ou d'une classe.



