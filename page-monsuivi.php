<?php
session_start();
if (!isset($_SESSION['mdp'])) {
    $url = home_url('/connexion');
    header("Location: $url");
    exit();
}
?>


<?php
/* Template Name: MonSuiviPage */
// page-monsuivi.php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!is_user_logged_in()) {
    // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
    wp_redirect(home_url('/login/'));
    exit;
}

get_header(); // J'importe mon header


// wp_login_form();
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
// Récupérez les données de la session
$donnees_formulaire = isset($_SESSION['donnees_formulaire']) ? $_SESSION['donnees_formulaire'] : '';

// Affichez le contenu en fonction des données du formulaire
if (strpos($donnees_formulaire, 'futur_maman_trimestre1') !== false) {
    echo '<p>Contenu spécifique pour Futur Maman au Premier trimestre</p>';
} elseif (strpos($donnees_formulaire, 'futur_maman_trimestre2') !== false) {
    echo '<p>Contenu spécifique pour Futur Maman au Deuxième trimestre</p>';
} elseif (strpos($donnees_formulaire, 'futur_maman_trimestre3') !== false) {
    echo '<p>Contenu spécifique pour Futur Maman au Troisième trimestre</p>';
} elseif (strpos($donnees_formulaire, 'futur_papa_trimestre1') !== false) {
    echo '<p>Contenu spécifique pour Futur Papa au Premier trimestre</p>';
} elseif (strpos($donnees_formulaire, 'futur_papa_trimestre2') !== false) {
    echo '<p>Contenu spécifique pour Futur Papa au Deuxième trimestre</p>';
} elseif (strpos($donnees_formulaire, 'futur_papa_trimestre3') !== false) {
    echo '<p>Contenu spécifique pour Futur Papa au Troisième trimestre</p>';
} else {
    echo '<p>Contenu par défaut</p>';
}



// $user = wp_get_current_user();
// var_dump($user);


get_footer(); // J'importe mon pied de page
