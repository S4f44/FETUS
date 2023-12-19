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
<body  <?php body_class(); ?>>  
        <?php wp_body_open(); ?>


      
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



<!------------------MAIN----------------->
   <main>
   <section>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 formulaire">
                <!-- <form action="/page-monsuivi.php"  action="/page-mesobjectifs.php"  action="/page-formulaire.php" action="/page-connexion.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()"> -->
                <form action="/form-process.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <h1 class="col-md-6 offset-md-3">Formulaire</h1>


                    <!-- Ajout de la checklist pour le genre -->
                    <div class="form-group row">
                        <label class="col-md-3 customlab">Qui êtes-vous?</label>
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check form-check-inline custom-radio">
                                <input type="radio" id="futuremam" name="quietesvous" value="futuremam" class="form-check-input custom-radio-input">
                                <label for="futuremam" class="form-check-label custom-radio-label">La future maman</label>
                            </div>
                            <div class="form-check form-check-inline custom-radio">
                                <input type="radio" id="futurpa" name="quietesvous" value="futurpa" class="form-check-input custom-radio-input">
                                <label for="futurpa" class="form-check-label custom-radio-label">Le futur papa</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="semaines" class="col-md-6 offset-md-3 customlab">Indiquez le nombre de semaines de grossesse que vous ou votre partenaire avez atteint:</label>
                        <select id="semaines" name="semaines" class="col-md-6 offset-md-3">
                            <option value="1-4">1-4 semaines</option>
                            <option value="5-7">5-7 semaines</option>
                            <option value="8-11">8-11 semaines</option>
                            <option value="12-15">12-15 semaines</option>
                            <option value="16-19">16-19 semaines</option>
                            <option value="20-23">20-23 semaines</option>
                            <option value="24-27">24-27 semaines</option>
                            <option value="28-31">28-31 semaines</option>
                            <option value="32-35">32-35 semaines</option>
                            <option value="36-40">36-40 semaines</option>
                        </select>
                    </div>
                   


                    <div class="col-md-4 offset-md-4">
        
                        <!-- <a href="<?php// echo get_template_directory_uri(); ?> /page-formulaire.php" class="btnprimaire">Suivant</a> -->
                        <a href="#" class="btnprimaire">Valider</a>
                    
                    </div>

                </form>

               

            </div>
        </div>
    </div>
</section>
    </main> 

    

   


<?php get_footer(); ?>