<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $contact->prenom; ?></title>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<h1><?php echo $contact->prenom; ?></h1>
	<div>
		<span>Prenom :</span>
		<?php echo $contact->prenom; ?>
	</div>
	<div>
		<span>Nom :</span>
		<?php echo $contact->nom; ?>
	</div>
	<div>
		<span>Sexe :</span>
		<?php echo $contact->sexe; ?>
	</div>
	<div>
		<span>Service :</span>
		<?php echo $contact->service; ?>
	</div>
	<div>
		<span>Date embauche :</span>
		<?php echo $contact->date_embauche; ?>
	</div>
	<div>
		<span>Salaire :</span>
		<?php echo $contact->salaire; ?>
	</div>



</body>
</html>