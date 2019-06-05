$(document).ready(function(){
	// La suite sera éxécutée après le chargement de la page
	$("#submit").click(function(event){
		// on cible un evenement JS quel qu'il soit
		event.preventDefault(); // Annule le comportement initial du submit
		affichageProduit(); // On lance la fonction que l'on souhaite éxécuter
	});
	
	function affichageProduit(){
		
		$.ajax({
			url : 'ajax.php',
			dataType: 'json',
			success : function(data){
				console.log(data);
				$("#resultat").html(data.resultat);
			}
		});
		
		//$.post('ajax.php', '', function(data){}, 'json');
	}
	
});

