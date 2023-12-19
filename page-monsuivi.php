<?php
session_start();
/* Template Name: MonSuiviPage */
if (!is_user_logged_in()) { // je vérifie si je suis connecté
  wp_redirect( home_url() . "/connexion" ); // si pas je redirige vers la page login
	exit;
}

$user = wp_get_current_user();
var_dump($user);

get_header(); // j'importe mon header
// attention c'est important de faire les redirection avant le header sinon la redirection ne marche pas
?>

coucou c'est une page privée

<?php 
//$user = wp_get_current_user();
//
?>



<?php
    // Vérifie si un utilisateur est connecté
    if (is_user_logged_in()) {
        // Affiche un message ou un lien spécifique pour les utilisateurs connectés
        echo '<p>Bienvenue, ' . esc_html(wp_get_current_user()->user_login) . '!</p>';
    } else {
        // Affiche un message ou un lien spécifique pour les utilisateurs non connectés
        echo '<p>Connectez-vous pour accéder à davantage de fonctionnalités.</p>';
    }
    ?>






<section class="presentationttsav">
    <div class="container text-center">
        <div class="row">
            <h1>Mon suivi</h1>
                <input type="file" id="profile-pic" name="profile-pic" class="file-upload-input">
            <div class="col-md-4 my-5">
                <h3>Nom</h3>
                <p><?php echo esc_html($user->user_login); ?></p>
            </div>
            <div class="col-md-1 my-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bebe.svg" alt="image bébé">
            </div>
            <div class="col-md-4 my-5">
                <h3>Futur prénom</h3>
                <p><?php echo esc_html($user->user_login); ?></p>
            </div>
        </div>
    </div>
</section>


<section>
        <div class="container text-center">
            <div class="row">
              <div class="col-md-12">

                    <span class="scrolling-span">Accordez-vous le repos nécessaire. Vous êtes en train de bâtir les fondations de quelque chose d'extraordinaire. Prenez soin de vous.</span>
                    <span class="scrolling-span">Les débuts peuvent sembler un peu tumultueux, mais n'oubliez pas que chaque vague apporte quelque chose de nouveau. Vous naviguez bien.</span>
                    <span class="scrolling-span">Les hauts et les bas des nausées matinales sont comme des virages serrés sur la route de la maternité. Accrochez-vous, vous êtes en plein rodéo !</span>
                    <span class="scrolling-span">Votre première étape est lancée, et c'est une mission spéciale : créer une vie. Continuez à avancer avec détermination.</span>
                    <span class="scrolling-span">Chaque jour est une pierre supplémentaire dans la construction de votre parcours parental. Restez concentré(e) sur la mission.</span>
              
                </div>
           </div>
        </div>
    </section>

<!------------------------------------------------------ STYLE PHRASES QUI DÉFILENT -------------------------------------------------------------->

            <style>
        .scrolling-span {
            opacity: 0;
            transition: opacity 0.5s;
            position: absolute;
        }

        .visible {
            opacity: 1 !important;
        }
        </style>

<!------------------------------------------------------ JAVASCRIPT PHRASES QUI DÉFILENT -------------------------------------------------------------->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Récupérez toutes les balises h3 avec la classe "scrolling-h3"
    var h3Elements = document.querySelectorAll('.scrolling-h3');

    // Index actuel du titre affiché
    var currentIndex = 0;

    // Changez le titre toutes les 3 secondes
    setInterval(function() {
        // Masquez tous les titres
        h3Elements.forEach(function(element) {
            element.style.display = 'none';
        });

        // Affichez le titre suivant
        h3Elements[currentIndex].style.display = 'block';

        // Passez au titre suivant
        currentIndex = (currentIndex + 1) % h3Elements.length;
    }, 3000);
});

</script>



<?php 
$user = wp_get_current_user();
var_dump($user);
?>

<?php get_footer(); // J'importe mon pied de page?>
