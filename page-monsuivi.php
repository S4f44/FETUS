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
