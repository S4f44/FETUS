<?php
/* Template Name: login-new */ 
if (is_user_logged_in()) {
  // si je suis déjà connecté je suis redirigé vers la page home
  wp_redirect(home_url('/page-monsuivi/'));
	exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FetUs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/formstyle.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body  <?php body_class(); ?>> <!--Ajoute des classes CSS dynamiques basées sur les caractéristiques de la page dans WordPress. -->
        <?php wp_body_open(); ?> <!--Fournit un point d'accroche pour ajouter du contenu juste après la balise d'ouverture <body> dans un thème WordPress. -->


      
<!------------------HEADER----------------->

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand d-lg-none" href="index.php">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo FetUs">
            </a> 
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

            
             <?php wp_nav_menu([
                'theme_location' => 'header', // localisation de mon menu
                'container' => false, // permet de retirer mon container
                'menu_class' => 'navbar-nav mx-auto' // la classe que je veux dans mon <ul></ul>
             ]); 
             ?>

                
            </div>
        </div>
    </nav>  

    <div class="container"> 
</header>



<!------------------CONTENU----------------->
<section>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 formulaire">
                    <form action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">

                        <h1 class="col-md-6 offset-md-3 text-center">Connexion</h1>

                        <label for="log">Nom d\'utilisateur ou adresse e-mail</label>
                        <input type="text" name="log" id="log" placeholder="@gmail.be" value="<?php echo esc_attr( $user_login ); ?>">

                        <label for="pwd">Mot de passe</label>
                        <input class="offset-md-3" type="password" name="pwd" id="pwd" placeholder="Votre mot de passe">
                    
                        <div class="col-md-12 text-center mt-4">
                            <input type="submit" name="submit" value="Se connecter">
                            <!-- <input type="hidden" name="redirect_to" value="<?php //echo esc_url( home_url('/') ); ?>"> -->
                            <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url('/page-monsuivi/')); ?>">
                            
                        <div class="col-md-12 text-center mt-2 bontonlien">
                            <a href="mot_de_passe_oublie.php" class="mot-de-passe-oublie">Mot de passe oublié ?</a> / <a href="<?php echo get_template_directory_uri(); ?>/enregistrer" class="inscription">S'inscrire</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>