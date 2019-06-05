
$(document).ready(function(){
	// Le code suivant sera éxécuté après chargement de la page
	
	$("#submit").click(function(event){
		event.preventDefault(); // Bloque le fonctionnement initial
		insertEmploye(); // On exécute une fonction
	});
	

	function insertEmploye(){
		
		//1 : Récupérer les infos du formulaire (tableau json)
		var params = {
			'prenom' : $("#prenom").val(), // La valeur saisie dans le champs prénom
			'nom' : $("#nom").val(),
			'service' : $("#service").val(),
			'salaire' : $("#salaire").val(),
			'sexe' : $("#sexe").val()
		};
		
		console.log(params);
		
		//2 : Lancer un fichier php (ajax.php) et lui transmettre les données
		$.post('ajax.php', params, function(response){
			console.log(response);
			if(response.validation == "OK"){
				$("#retour").html('<span class="alert alert-sucess">Félicitations, l\'employé est enregistré</span>');
				
				//3 : Afficher la réponse et vider le formulaire. 
				$("#prenom").val("");
				$("#nom").val("");
				$("#salaire").val("");
				$("#service").val("");
				$("#sexe").val("m");			
			}
			else{
				$("#retour").html('<span class="alert alert-danger">Un problème est survenu lors de l\'enregistrement</span>');
			}	
		}, 'json');
		
		
		

	}
	
	
	
	
	
	
});



