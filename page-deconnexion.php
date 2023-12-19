<!-- ?php
session_start();
$_SESSION = array();
session_destroy();
$deco = home_url('/connexion');
    header("Location: $deco");
?> -->

<?php
session_start();
wp_logout(); // Déconnecte l'utilisateur WordPress
$_SESSION = array(); // Remet à zéro toutes les données de la session
$deco = home_url('/connexion');
header("Location: $deco");
?>
