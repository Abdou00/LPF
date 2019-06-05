<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contacts</title>
		<link rel="stylesheet" type="text/css" href="view/css/style.css">
	</head>
	<body>
		<div><a href="index.php?op=new">Ajouter un nouvel employe</a></div>
		<table class="contacts">
			<thead>
				<tr>
					<th>Prenom</th>
					<th>Nom</th>
					<th>Sexe</th>
					<th>Service</th>
					<th>Date embauche</th>
					<th>Salaire</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($contacts as $contact) :  ?>
					<tr>
						<td>
							<a href="index.php?op=show&id=<?php echo $contact->id_employes; ?>">
								<?php echo htmlentities($contact->prenom);  ?>
							</a>
						</td>
						<td><?php echo htmlentities($contact->nom);  ?></td>
						<td><?php echo htmlentities($contact->sexe);  ?></td>
						<td><?php echo htmlentities($contact->service);  ?></td>
						<td><?php echo htmlentities($contact->date_embauche);  ?></td>
						<td><?php echo htmlentities($contact->salaire);  ?></td>
						<td>
							<a href="index.php?op=delete&id=<?php echo $contact->id_employes; ?>">
								delete
							</a>

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>


