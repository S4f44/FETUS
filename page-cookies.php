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


</header>

<main>

<section class="presentationcookies">
    
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
            <h1>Utilisation des cookies </h1>

            <p > Pour rendre la visite de notre site web attrayante et afin de permettre l’utilisation de certaines fonctions, nous utilisons des cookies. Ce sont de petits fichiers de texte qui sont stockés sur votre ordinateur ou smartphone. Certains cookies que nous utilisons seront supprimés après votre session de navigation lorsque vous fermez votre navigateur (il s’agit des soi-disant “cookies de session”). D’autres cookies restent sur votre appareil et nous permettent de reconnaître votre navigateur lorsque vous visitez à nouveau notre site (“cookies persistants”). Vous pouvez configurer votre navigateur afin d’en être informé à chaque utilisation de cookies. Vous pouvez également décider individuellement de les accepter ou non. Si vous refusez l’utilisation des cookies, certaines fonctionnalités de notre site peuvent être limitées.</p>
            </div>
        </div>
    </div>
      
    
  </section>

</main>




<?php get_footer(); ?>