<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus'); // support des menus par notre theme
register_nav_menu('header', 'En tête du menu');
register_nav_menu('footer', 'Pied de page');


function wpbootstrap_styles_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-bundle', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', false, '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

function montheme_menu_class($classes) {
  // va permettre de customizer les classe de nos items (donc nos `li`)
  $classes[] = 'nav-item';
  return $classes;
}
function montheme_menu_link_class($attrs) {
  // va permettre de customizer les classe de nos liens (donc nos `a`)
  $attrs['class'] = 'nav-link';
  return $attrs;
}

add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

function my_theme_enqueue_styles() {
  // Chargement de jQuery depuis Google CDN
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);

  // Chargement du script Bootstrap JavaScript
  wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



//////////////////////////FONCTION DU PHP DE LA PAGE CONNEXION //////////////////////////////////

// Fonction pour vérifier les identifiants (exemple avec un tableau en session)
function isValidCredentials($email, $password) {
  // Vous devez implémenter cette fonction pour vérifier les identifiants
  // Stockez vos identifiants de manière sécurisée, par exemple dans une base de données
  // Cette démo utilise un tableau en session (ne pas utiliser en production)
  $users = isset($_SESSION['/']) ? $_SESSION['/'] : [];

  // Parcourez les utilisateurs enregistrés
  foreach ($users as $user) {
      if ($user['email'] === $email && $user['password'] === $password) {
          return true; // Identifiants valides
      }
  }

  return false; // Identifiants invalides
}