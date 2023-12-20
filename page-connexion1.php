<?php
/* Template Name: login */ 
if (is_user_logged_in()) {
  // si je suis déjà connecté je suis redirigé vers la page home
  wp_redirect( home_url('/monsuivi') );
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

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico" type="image/x-icon">

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
            
            <button class="navbar-toggler collapsed mt-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img class="navbar-toggler-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/burger.svg">
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


<!-- CONTENU -->

<main>
   


<!-- ?php
session_start(); // Démarrer la session si elle n'est pas déjà démarrée

// Vérifier si les identifiants ont été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Vérifier si les identifiants sont valides (enregistrés dans la session)
    if (isValidCredentials($email, $password)) {
        // Identifiants valides, rediriger vers la suite du site
        header("Location: page-monsuivi.php");
        exit();
    } else {
        // Identifiants invalides, afficher un message d'erreur
        echo "Identifiants invalides. Veuillez réessayer.";
    }
} -->



// Exemple : Enregistrez un utilisateur dans la session (à faire dans la page d'enregistrement)
// Notez que c'est une démo et ne doit pas être utilisé en production
$_SESSION['heloise'] = [
    ['email' => 'heloiselopez@gmail.be', 'password' => 'helo123lop'],
    // Ajoutez d'autres utilisateurs au besoin
];
?>


 <!---------------------------- VERSION 2 ------------------------------------------->

 
<section>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 formulaire">
                <!-- <form action="<?= //home_url('/login'); ?>" method="POST"> -->
                <form action="<?php echo esc_url( site_url( 'monsuivi' ) ); ?>" method="post">

                    <h1 class="col-md-6 offset-md-3 text-center">Connexion</h1>

                    <label class="customlab" for="email">E-mail :</label>
                    <input class="offset-md-3 custom" type="text" id="log" name="log" value="<?php echo esc_attr( $user_login ); ?>" placeholder="@gmail.be" required>

                    <label class="customlab" for="password">Mot de passe :</label>
                    <input class="offset-md-3 custom" type="password" id="pwd" name="pwd" placeholder="Votre mot de passe" required> 




                    <div class="col-md-12 text-center mt-4">
                        <!-- <a href= "<?php //echo get_template_directory_uri(); ?>/monsuivi">
                        <button type="submit" name="envoi" class="btnprimaire">Se connecter</button>
                        </a> -->
                        <input type="submit" name="submit" value="Se connecter">
		                        <input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url('/') ); ?>">
                    </div>




                    <div class="col-md-12 text-center mt-2 bontonlien">
                        <a href="mot_de_passe_oublie.php" class="mot-de-passe-oublie">Mot de passe oublié ?</a> / <a href="<?= home_url('/enregistrer'); ?>" class="inscription">S'inscrire</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>