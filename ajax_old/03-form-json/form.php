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
			<form method="POST">
				<label>Choisir une personne</label>
				<select onchange="monAjax()" id="personne">
					<option>...</option>
					<option>chevel</option>
					<option>cottet</option>
					<option>grand</option>
					<option>fellier</option>
					<option>lafaye</option>
					<option>durand</option>
				</select>
			</form>
			<hr>
			<div id="resultat"></div>

			<?php
			/*
			$fichier = file_get_contents('fichier.json');
			// $tableau = json_decode($fichier); // format array / object
			$tableau = json_decode($fichier, true); // format array / array
			echo '<pre>'; var_dump($tableau); echo '</pre>';
			*/
			 ?>
			 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
			 <script>
			 	/*
				function monAjax() {
					var valeur = $('#personne').val();
					var fichier = 'ajax.php';
					var params = 'choix='+valeur;
					console.log(params);

					$.post(fichier, { choix: valeur } ,function (data) {$('#resultat').html(data.contenu);}, 'json');
				}
				*/

			 	
			 	function monAjax() {
			 		var fichier = 'ajax.php';
			 		var valeur = document.getElementById('personne').value;
			 		var params = 'choix='+valeur;
			 		console.log(params);

			 		// instanciation de l'objet ajax avec prise en compte d'internet explorer
			 		if(window.XMLHttpRequest) {
			 			var xhttp = new XMLHttpRequest();
			 		} else {
			 			// pour internet explorer
			 			var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			 		}

			 		xhttp.open("POST", fichier, true);
			 		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

			 		xhttp.onreadystatechange = function() {

			 			if(xhttp.readyState == 4 && xhttp.status == 200) {
			 				console.log(xhttp.responseText);
			 				// on transforme la réponse (string) en objet JSON
			 				var reponse = JSON.parse(xhttp.responseText);
			 				document.getElementById('resultat').innerHTML = reponse.contenu;
			 			}
			 		}
			 		xhttp.send(params); // on envoie
			 	}
			 </script>
		</div>
	</body>
</html>		