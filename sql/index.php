<?php
$bdd = new PDO('mysql:host=localhost;dbname=mabase;', 'samba', 'Abdoulaye@92vlg');

// Tri par ordre(ORDER BY) aplphabétique
$requete = $bdd->query('SELECT * FROM jeux_video ORDER BY nom ASC');

// Écrire une requête qui selectionne tous les jeux de moins de 30
$requete2 = $bdd->query('SELECT * FROM jeux_video WHERE prix <= "30"');

// Écrire une requête qui selectionne tous les jeux de Michel
$requete3 = $bdd->query('SELECT * FROM jeux_video WHERE possesseur = "michel"');

// Écrire une requête qui selectionne tous les jeux de Nes
$requete4 = $bdd->query('SELECT * FROM jeux_video WHERE console = "NES"');

// Écrire une requête qui selectionne tous les jeux entre 30 & 50 (NB: Méthode BETWEEN)
$requete5 = $bdd->query('SELECT * FROM jeux_video WHERE prix BETWEEN "30" AND "50"');

//Écrire une requête qui selectionne tous les jeux  qui rassemble plus de 2 joueurs et mois de 8(NB: Méthode AND)
$requete6 = $bdd->query('SELECT * FROM jeux_video WHERE (nbre_joueurs_max > "2") AND ( nbre_joueurs_max < "8")');

// Écrire une requête qui fait le total des prix, par possesseur par ordre décroissant de prix (Méthode SUM, GROUP BY)
$requete7 = $bdd->query('SELECT possesseur, SUM(prix) AS total FROM jeux_video GROUP BY possesseur');

/**
 * $nom = $_POST['nom'];
 *  $possesseur = $_POST['possesseur'];
 * $console = $_POST['console'];
 * $prix = $_POST['prix'];
 * $nbre_joueurs_max = $_POST['nbre_joueurs_max'];
 * $commentaires = $_POST['commentaires'];
 * $tab = array(
 *     $nom => '$nom',
 *     $possesseur => '$possesseur',
 *     $console => '$console',
 *     $prix => '$prix',
 *     $nbre_joueurs_max => '$nbre_joueurs_max',
 *     $commentaires => '$commentaires'
 * );
 * // Uniquement pour moi(samba)
 * $insertion = $bdd->query('INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES (":nom", ":possesseur", ":console", ":prix", ":nbre_joueurs_max", ":commentaires")');
 * $req = $bdd->prepare($insertion);
 * $req->execute($tab);
*/
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
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Possesseur</th>
      <th scope="col">Console</th>
      <th scope="col">Prix</th>
      <th scope="col">Nb joueurs mx</th>
      <th scope="col">Commentaires</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($donnees = $requete7->fetch()) { ?>
        <tr>
            <th scope="row"><?php echo $donnees['ID'] ?></th>
            <td><?php echo $donnees['nom'] ?></td>
            <td><?php echo $donnees['possesseur'] ?></td>
            <td><?php echo $donnees['console'] ?></td>
            <td><?php echo $donnees['total'] ?></td>
            <td><?php echo $donnees['nbre_joueurs_max'] ?></td>
            <td><?php echo $donnees['commentaires'] ?></td>
        </tr>
    <?php } ?>
  </tbody>
</table>

<a href="ajouter.php"></a>
</body>
</html>