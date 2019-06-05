<?php 
include 'inc/init.inc.php';



include 'inc/header.inc.php';
// echo '<pre>'; var_dump($_SESSION); echo '</pre>';
?>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Bienvenue sur notre Blog</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin urna neque, posuere fringilla magna luctus, laoreet placerat metus. Sed condimentum odio vitae eros finibus vulputate.</p>
      </div>
	  
		<div class="row">
			<div class="col-sm-3">
				<h3>Catégories</h3>
			</div>
			<div class="col-sm-9">
				<div class="row" id="affichage_article">
				
				</div>
			</div>
		</div>
	  

    </main><!-- /.container -->
	
<?php
include 'inc/footer.inc.php';


