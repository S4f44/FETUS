<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // Ajouter la prise en charge des images mises en avant
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






//////////////////////////page--register/////////////////////////
function create_account(){
	//You may need some data validation here
	$user = ( isset($_POST['uname']) ? $_POST['uname'] : '' );
	$pass = ( isset($_POST['upass']) ? $_POST['upass'] : '' );
	$email = ( isset($_POST['uemail']) ? $_POST['uemail'] : '' );

	if ( !username_exists( $user )  && !email_exists( $email ) ) {
		$user_login = wp_slash( $user );
		$user_email = wp_slash( $email );
		$user_pass = $pass;

		$userdata = compact('user_login', 'user_email', 'user_pass');
		$user_id = wp_insert_user($userdata);

		if( !is_wp_error($user_id) ) {
			// user has been created
			$user = new WP_User( $user_id );
			$user->set_role( 'contributor' ); // type d'user que je veux a ce moment la 
			// redirection après connexion
			wp_redirect(esc_url(home_url('/')));
			exit;
		} else {
			//$user_id is a WP_Error object. Manage the error
		}
	}
}

//////////////////////CUSTOM POST CONSEILS/////////////////////////
function create_custom_posts() {
	register_post_type('conseilsun', [
        'labels' => ['name' => 'Conseils premier trimestre'],
        'public' => true,
        'show_in_rest' => true,
        'support' => ['thumbnails']
    ]);
	register_post_type('conseilsdeux', [
        'labels' => ['name' => 'Conseils deuxième trimestre'],
        'public' => true,
        'show_in_rest' => true,
        'support' => ['thumbnails']
    ]);
	register_post_type('conseilstrois', [
        'labels' => ['name' => 'Conseils troisième trimestre'],
        'public' => true,
        'show_in_rest' => true,
        'support' => ['thumbnails']
    ]);
}
add_action('init', 'create_custom_posts');




/////////////FORMULAIRE INSCRIPTION/////////////////////////
function formulaire_inscription_personnalise() {
    ?>
    <form id="inscription-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
        <input type="hidden" name="action" value="inscription_utilisateur">

        <label for="genre">Genre :</label>
        <select name="genre" id="genre">
            <option value="futur_maman">Futur Maman</option>
            <option value="futur_papa">Futur Papa</option>
        </select>

        <label for="stade_grossesse">Stade de grossesse :</label>
        <select name="stade_grossesse" id="stade_grossesse">
            <option value="trimestre1">Premier trimestre</option>
            <option value="trimestre2">Deuxième trimestre</option>
            <option value="trimestre3">Troisième trimestre</option>
        </select>

        <?php wp_nonce_field( 'inscription_nonce', 'inscription_nonce' ); ?>

        <input type="submit" value="S'inscrire">
    </form>
    <?php
}
add_shortcode( 'inscription_form', 'formulaire_inscription_personnalise' );

// Gérer l'enregistrement des utilisateurs
function inscription_utilisateur() {
    if (isset($_POST['inscription_nonce']) && wp_verify_nonce($_POST['inscription_nonce'], 'inscription_nonce')) {
        // Récupérer et traiter les données du formulaire
        $genre = sanitize_text_field($_POST['genre']);
        $stade_grossesse = sanitize_text_field($_POST['stade_grossesse']);

        // Stocker les données dans la session
        $_SESSION['donnees_formulaire'] = $genre . '_' . $stade_grossesse;

        // Rediriger vers la page de suivi après l'inscription
        wp_redirect(home_url('/page-monsuivi/'));
        exit();
    }
}

add_action( 'admin_post_nopriv_inscription_utilisateur', 'inscription_utilisateur' );
add_action( 'admin_post_inscription_utilisateur', 'inscription_utilisateur' );




///////////////////POUR CACHER LA BARRE D OPTION WORDPRESS//////////////////////
function tf_check_user_role( $roles ) {
	// si pas connecté alors je sors de la function
	if ( !is_user_logged_in() ) {
		return;
	}

	// je récupère les information de la personne connectée 
	$user = wp_get_current_user();
	// je récupère les roles
	$currentUserRoles = $user->roles;
	// je compare le tableaux de roles de mon user et celui que j'ai envie de comparer pour voir si y a des matches
	$isMatching = array_intersect( $currentUserRoles, $roles);
	$response = false; // par défaux je suis a false

	// si y a matche alors je mets a true
	if ( !empty($isMatching) ) {
		$response = true;
	}

	// je retourne le résultat 
	return $response;
}
$roles = [ 'contributor' ];
if ( tf_check_user_role($roles) ) {
	add_filter('show_admin_bar', '__return_false');
}


/////////////////////////////////////////////////////////////////CAROUSSEL DE PHRASE
function custom_carousel_script() {
    ?>
    <style>
        #carousel-container {
            overflow: hidden;

        }

        .carousel-item {
            display: block;
            font-family: 'Montserrat', sans-serif;
            font-size: 15pt; 
            font-weight: 700;
            letter-spacing: 2pt;
            text-transform: uppercase;
            color: #121F40;
            display: block;
            margin-top: 80px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let currentIndex = 0;
            const items = document.querySelectorAll('.carousel-item');

            function showItem(index) {
                items.forEach(item => item.style.display = 'none');
                items[index].style.display = 'block';
            }

            function nextItem() {
                currentIndex = (currentIndex + 1) % items.length;
                showItem(currentIndex);
            }

            // Afficher le premier élément
            showItem(currentIndex);

            // Changer d'élément toutes les 4 secondes
            setInterval(nextItem, 7000);
        });
    </script>
    <?php
}

add_action('wp_footer', 'custom_carousel_script');


