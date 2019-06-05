$(document).ready(function() {
	
	// CONNEXION
	$('#validation').on('click', function (e) {
		e.preventDefault();
		var params = $('#form').serialize();		
		params = params + '&mode=connexion';
		console.log(params);
		$.post('ajax.php', params, function(data) {
			$('#message').html(data.message);			
			if(data.validation == 'OK') {
				window.location = 'index.php';
			}			
		}, 'json');		
	});
	
	// ENREGISTREMENT DES ARTICLES
	$('#form_article').on('submit', function (e) { // lors de la validation du formulaire

	  e.preventDefault(); // on bloque la validation du formulaire.

	  var fichier = 'ajax.php'; // le fichier cible pour ajax
	  var params = $("#form_article").serialize(); // les informations du formulaires

	  // ajout d'un parametre pour décider côté php si on enregistre ou si on récupère les articles
	  // params += '&mode=enregistrer';
	  params = params + '&mode=enregistrer';

	  console.log(params);

	  $.post(fichier, params, function (reponse) {
		  $('#resultat').html(reponse.message);
		  $('#form_article').trigger("reset"); // on vide les champs du formulaire
	  }, 'json');
	});	
	
	
	// AFFICHAGE DES ARTICLES
	setInterval(liste_article, 5000);

	function liste_article() {
	  $.post('ajax.php', 'mode=afficher', function (reponse) {
		  $('#affichage_article').html(reponse.message);
	  }, 'json');
	}
	
	
	
	
	
});