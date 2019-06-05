<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	
	
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
  
  
  
	 <script src="ajax.js"></script>
</head>
<body>
<div class="container">
    <form method="post" action="">
		
		<div id="retour"></div>
		
        <div class="form-group">
            <label for="prenom">Prénom</label> <br>
            <input class="form-control" type="text" id="prenom" name="prenom" value=""><br>
        </div>

        <div class="form-group">
            <label for="nom">Nom</label> <br>
            <input class="form-control" type="text" id="nom" name="nom" value=""> <br>
        </div>

        <div class="form-group">
            <label for="">Sexe</label> <br>
			<select name="sexe" id="sexe">
				<option value="m">Homme</option>
				<option value="f">Femme</option>
			</select>
        </div>

        <div class="form-group">
            <label for="service">Service</label> <br>
            <input class="form-control" type="text" id="service" name="service" value=""> <br>
        </div>

        <div class="form-group">
            <label for="salaire">Salaire</label> <br>
            <input class="form-control" type="text" id="salaire" name="salaire" value=""> <br>
        </div>
        <input type="submit" value="enregistrer" id="submit">
    </form>
</div>


<!-- 
IMPORTANT : 
	- Appel à Jquery
	- Id à chaque champs
	- Id submit au bouton
	- Une div pour la réponse
 -->