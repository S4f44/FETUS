<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus'); // support des menus par notre theme
register_nav_menu('header', 'En tête du menu');

register_nav_menu('footer', 'Pied de page');


function wpbootstrap_styles_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-bundle', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', false, '1.0.0', true);
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