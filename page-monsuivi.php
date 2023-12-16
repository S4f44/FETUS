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
if ($donnees_formulaire === 'valeur_condition_1') {
    echo '<p>Contenu spécifique pour la valeur_condition_1</p>';
} elseif ($donnees_formulaire === 'valeur_condition_2') {
    echo '<p>Contenu spécifique pour la valeur_condition_2</p>';
} else {
    echo '<p>Contenu par défaut</p>';
}

get_footer(); // J'importe mon pied de page
