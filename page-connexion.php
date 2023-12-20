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

<div class="container">
  <br><br><br><br><br><br>
  <form action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
		<label for="log">Nom d\'utilisateur ou adresse e-mail</label>
		<input type="text" name="log" id="log" value="<?php echo esc_attr( $user_login ); ?>">
		
    <label for="pwd">Mot de passe</label>
		<input type="password" name="pwd" id="pwd">
		
    <input type="submit" name="submit" value="Se connecter">
		<input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url('/monsuivi') ); ?>">
	</form>

</div>

<?php get_footer(); ?>