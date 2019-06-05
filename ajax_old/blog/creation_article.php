<?php 
include 'inc/init.inc.php';
if(empty($_SESSION['user'])) {
	header("location:index.php");
}


include 'inc/header.inc.php';
?>

    <main role="main" class="container">

		<div class="starter-template">
			<h1>Vous pouvez créer un article depuis cette page</h1>
			<hr>        
		</div>
	  
		<div class="row">
			<div class="col-sm-6 mx-auto">
				<hr>
				<form id="form_article" class="form" method="post" action="">
					<div class="form-group">
						<input type="text" name="titre" id="titre" value="" class="form-control" placeholder="Titre...">
					</div>
					<div class="form-group">
						<input type="text" name="categorie" id="categorie" value="" class="form-control" placeholder="Catégorie...">
					</div>
					
					
					
					<div class="form-group">
						<input type="text" name="photo" id="photo" value="" class="form-control" placeholder="Photo...">
						<small class="text-danger"><i>Veuillez insérer une url valide pour la photo de l'article</i></small>
					</div>
					
					
					
					<div class="form-group">
						<textarea name="contenu" id="contenu" class="form-control" placeholder="Contenu..."></textarea>
					</div>
					<div class="form-group">
						<button type="submit" id="enregistrer" name="enregistrer" class="form-control btn btn-warning">Enregistrer</button>
					</div>
				</form>
				<hr>
			</div>             
		</div>
		
		<div class="row"><div class="col-sm-12" id="resultat"></div></div>

    </main><!-- /.container -->
	
<?php
include 'inc/footer.inc.php';