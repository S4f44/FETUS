<?php
/* Template Name: login-new */ 
if (is_user_logged_in()) {
  // si je suis déjà connecté je suis redirigé vers la page home
  wp_redirect( home_url('/') );
	exit;
}

get_header();
// attention c'est important de faire les redirection avant le header sinon la redirection ne marche pas
?>

<div class="container text-center">
    <div class="row">
        <div class="col-md-10 offset-md-1 formulaire">
                <form action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">

                    <h1 class="col-md-6 offset-md-3 text-center">Connexion</h1>

                    <label for="log">Nom d\'utilisateur ou adresse e-mail</label>
                    <input type="text" name="log" id="log" id="email" name="email" placeholder="@gmail.be" value="<?php echo esc_attr( $user_login ); ?>">
                    
                    <label for="pwd">Mot de passe</label>
                    <input class="offset-md-3" type="password" name="pwd" id="pwd" placeholder="Votre mot de passe">
                 
                    <div class="col-md-12 text-center mt-4">
                        <input type="submit" name="submit" value="Se connecter">
                        <input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url('/') ); ?>">
                        
                    <div class="col-md-12 text-center mt-2 bontonlien">
                        <a href="mot_de_passe_oublie.php" class="mot-de-passe-oublie">Mot de passe oublié ?</a> / <a href="<?php echo get_template_directory_uri(); ?>/enregistrer" class="inscription">S'inscrire</a>
                    </div>
                </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>