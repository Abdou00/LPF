<?php

print_r($_POST);

echo '<hr>';

if (!empty($_POST)) {
    echo 'Ville : ' . $_POST['ville'] . '<br>';
    echo 'Code postal : ' . $_POST['cp'] . '<br>';
    echo 'Adresse : ' . $_POST['adresse'] . '<br>';
}