<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitez les données du formulaire ici
    $donnees_formulaire = $_POST['futur_maman_trimestre1'];
    // Stockez les données dans la session
    $_SESSION['donnees_formulaire'] = $donnees_formulaire;

    // Redirigez l'utilisateur vers la page monsuivi
    wp_redirect(home_url('/monsuivi/'));
    exit;
} else {
    // Gestion des requêtes non autorisées (peut être adapté selon vos besoins)
    wp_redirect(home_url('/'));
    exit;
}

