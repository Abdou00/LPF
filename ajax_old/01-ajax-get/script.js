/*
Statut de la requete Ajax: (readyState)
---------------------------
0 - L'objet AJAX a été instancié mais pas encore appelé
1 - on envoie la requete Ajax
2 - la requete est reçue
3 - Le serveur traite la requete et commence à envoyer les données
4 - La requete est finie, nous avons reçu la réponse.

Statut http: (status)
---------------------
- 200 - tout est OK

ajax.onreadystatechange - permet de décomposer les différents états de la requete afin de déclencher notre code une fois la requete finie.

ajax.responseText - contient la totalité de la réponse passée à notre objet ajax.
*/

document.getElementById('bouton').addEventListener('click', function() {
	var xhttp = new XMLHttpRequest(); // instanciation de l'objet XMLHttpRequest

	xhttp.onreadystatechange = function() {
		console.log(xhttp.readyState);
		console.log(xhttp.status);

		if(xhttp.readyState == 4 && xhttp.status == 200) {
			console.log(xhttp.responseText); // affiche la réponse dans la console

			//document.getElementById('titre').textContent = xhttp.responseText;
			document.getElementById('titre').innerHTML = xhttp.responseText;

		}
	}
	xhttp.open('GET', 'infos.txt', true); // on prépare la requete ajax
	xhttp.send(); // on l'envoie
});