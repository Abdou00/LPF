<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajax - form - json</title>
		<style>
			form { width: 50%; margin: 0 auto; padding: 20px; }
			select { width: 100%; height: 30px; border: 1px solid #333; margin-bottom: 20px; }
		</style>
	</head>
	<body>
		<div style="width: 1000px; margin: 0 auto; padding: 20px;">

			<?php			
			$fichier = file_get_contents('fichier.json');
			// $tableau = json_decode($fichier); // format array / object
			$tableau = json_decode($fichier, true); // format array / array	
			?>

			<form method="POST" action="ajax.php" id="form">
				<label>Choisir une personne</label>
				<select id="personne" name="choix">
					<option>...</option>
					<?php 
						foreach($tableau AS $valeur) {
							echo '<option>' . $valeur['nom'] . '</option>';
						}
					?>
				</select>
			</form>
			<hr>
			<div id="resultat"></div>

			
			 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

			<script>
			 	
			 	$(document).ready(function () {

			 		$('#personne').on('change', function () {

			 			/*
			 			var fichier = 'ajax.php';
			 			var valeur = $(this).val();	
			 			var params = 'choix='+valeur;
			 			console.log(fichier);
			 			console.log(valeur);
			 			console.log(params);
			 			*/

			 			var fichier = $('#form').attr('action');
			 			var methode = $('#form').attr('method');
			 			var params =  $('#form').serialize();
						console.log(fichier);
			 			console.log(methode);
			 			console.log(params);
			 			
			 			// avec la methode jQuery post()
			 			$.post(fichier, params, function (response) {
			 				console.log(response);
			 				$("#resultat").html(response.contenu);
			 			}, 'json');

			 			// ordre des arguments avec .post()
			 			// 1 seul param:
			 			// $.post('fichier_cible', 'param=valeur', 'function en cas de success', 'type de données');
			 			// avec plusieurs params
						// $.post('fichier_cible', { param1: 'valeur1', param2: 'valeur2', ... }, 'function en cas de success', 'type de données');

			 			// avec la methode jQuery ajax()
			 			/*
			 			$.ajax( {
			 				url: fichier, // le fichier cible 
			 				type: methode,  // la methode utilisée 
			 				data: params, // les arguments à fournir 
			 				success: function(response) {
			 					console.log(response);
			 					$("#resultat").html(response.contenu);
			 				}, // la fonction qui doit s'exécuter lors de la reussite de la communication ajax 
			 				dataType: 'json' // le format des données attendues 
			 			} );
			 			*/
			 		});
			 	});

			</script>
		</div>
	</body>
</html>		