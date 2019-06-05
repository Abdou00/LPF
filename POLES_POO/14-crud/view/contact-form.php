<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo htmlentities($title); ?></title>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<form method="POST" action="">
		<label for="prenom">Prenom :</label><br>
		<input type="text" name="prenom" id="prenom" value="<?= $prenom ?>"><br>

		<label for="nom">Nom :</label><br>
		<input type="text" name="nom" id="nom" value="<?= $nom ?>"><br>

		<label for="sexe">Sexe :</label><br>
		<input type="text" name="sexe" id="sexe" value="<?= $sexe ?>"><br>

		<label for="service">Service :</label><br>
		<input type="text" name="service" id="service" value="<?= $service ?>"><br>

		<label for="date_embauche">Date d'embauche :</label><br>
		<input type="text" name="date_embauche" id="date_embauche" value="<?= $date_embauche ?>"><br>

		<label for="salaire">Salaire :</label><br>
		<input type="text" name="salaire" id="salaire" value="<?= $salaire ?>"><br>

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>