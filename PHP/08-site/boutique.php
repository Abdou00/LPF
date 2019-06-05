<?php
require_once 'inc/init.inc.php';

//------------------------ TRAITEMENT ------------------------
// 1- Affichage des catégories :

$resultat = executeRequete("SELECT DISTINCT categorie FROM produit");

$contenu_gauche .= '<div class="list-group mb-4">';

    // Affichage de la catégorie "tous" par défaut :
    $contenu_gauche .= '<a href="?categorie=tous" class="list-group-item">Tous les produits</a>';

    // Affichage des autres catégories provenant de la BDD :
    while ($cat = $resultat->fetch(PDO::FETCH_ASSOC)) {  // FETCH_ASSOC crée un array associatif appelé $cat à chaque tour de boucle
        // debug($cat);
        $contenu_gauche .= '<a href="?categorie='. $cat['categorie'] .'" class="list-group-item">'. $cat['categorie'] .'</a>';
    }
$contenu_gauche .= '</div>';


// 2- Affichage des produits en fonction de la catégorie :
if (isset($_GET['categorie']) && $_GET['categorie'] != 'tous') {
    // si existe l'indice "categorie" dans l'url, et que sa valeur est différente de "tous", on sélectionne la catégorie demandée :
    $donnees = executeRequete("SELECT * FROM produit WHERE categorie = :categorie", array(':categorie' => $_GET['categorie']));
        
} else {
    // sinon si "categorie" n'existe pas dans l'url ou qu'elle est égale à "tous", on sélectionne TOUS les produits :
    $donnees = executeRequete("SELECT * FROM produit");
}

while ($produit = $donnees->fetch(PDO::FETCH_ASSOC)) {
   
    // debug($produit);
    $contenu_droite .= '<div class="col-sm-4 mb-4">';
        $contenu_droite .= '<div class="card">';

            // image cliquable :
            $contenu_droite .= '<a href="fiche_produit.php?id_produit='. $produit['id_produit'] .'">
                                    <img src="photo/'. $produit['photo'] .'" alt="'. $produit['titre'] .'" class="card-img-top">
                                </a>';
            
            // infos du produit :
            $contenu_droite .=  '<div class="card-body">'; 
                $contenu_droite .= '<h4>'. ucfirst($produit['titre']) .'</h4>';    
                $contenu_droite .= '<h5>'. number_format($produit['prix'], 2, ',', '') .' €</h5>';  // number_format(nombre, nombre de décimales, séparateur des décimales, séparateur des miliers) 
                $contenu_droite .= '<p>'. $produit['description'] .'</p>';  
            $contenu_droite .= '</div>';

        $contenu_droite .= '</div>';
    $contenu_droite .= '</div>';
}

//------------------------ AFFICHAGE ------------------------
require_once 'inc/haut.inc.php';
?>
    <h1 class="mt-4">Vêtements</h1>

    <div class="row">

        <div class="col-md-3">
            <?php echo $contenu_gauche;   // pour afficher les catégories ?>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php echo $contenu_droite;  // pour afficher les produits ?>
            </div>
        </div>
        
    </div><!-- .row -->

<?php
require_once 'inc/bas.inc.php';