$(document).ready(function(){
	$("#submit").click(function(event){
		
		event.preventDefault();
		affichageProduit();
	});
	
	function affichageProduit(){
		
		$.ajax({
			url : 'ajax.php',
			dataType : 'json',
			success : function(data){
				console.log(data);
				
				$("#resultat").html(data.resultat);
				//$("#resultat").append(data.resultat);
			}	
		});
	}
	
	
	
	
	
	
});

