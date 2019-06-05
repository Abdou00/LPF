<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajax - select</title>
		<style>
			form { width: 50%; margin: 0 auto; padding: 20px; }
			select { width: 100%; height: 30px; border: 1px solid #333; margin-bottom: 20px; }
		</style>
	</head>
	<body>
		<div style="width: 1000px; margin: 0 auto; padding: 20px;">
			<form>
				<label>Pays</label><br>
				<select id="pays">
					<option value="">Choisir une ville...</option>
					<option>France</option>
					<option>Angleterre</option>
					<option>Espagne</option>
				</select><br>

				<label>Ville</label>
				<select id="ville">
					<option>Veuillez choisir un pays...</option>
				</select>

			</form>
		</div>
		<script>

			// evenement
			document.getElementById('pays').addEventListener('change', function() {

				// fichier cible
				var fichier = 'ajax.php';

				// instanciation de l'objet ajax
				var xhttp = new XMLHttpRequest();

				// on récupère la valeur du champs pays
				// var valeur = document.getElementById('pays').value;
				var valeur = this.value;
				console.log(valeur);

				// préparation des paramètres pour POST
				var params = 'pays='+valeur;
				console.log(params);

				// préparation de la requete ajax
				xhttp.open("POST", fichier, true);
				// dans .open() 3 arguments: 
				// - la methode POST ou GET
				// - le fichier cible
				// - optionnel, asynchone ou pas (true / false) c'est un true par defaut.


				// en methode POST, la ligne suivante est obligatoire et doit se trouver après la ligne .open()
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

				xhttp.onreadystatechange = function() {
					if(xhttp.status == 200 && xhttp.readyState == 4) {
						console.log(xhttp.responseText);

						document.getElementById("ville").innerHTML = xhttp.responseText;
					}
				}
				xhttp.send(params); // on envoie la requete ajax. Les parametres de POST se placent dans la methode .send(parameters)

			});



			


		</script>
	</body>
</html>