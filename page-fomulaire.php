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
<body  <?php body_class(); ?>>  
        <?php wp_body_open(); ?>


      
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



<!------------------MAIN----------------->
   <main>
   <section>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 formulaire">
                <form action="/page-monsuivi.php"  action="/page-mesobjectifs.php"  action="/page-formulaire.php" action="/page-connexion.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <h1 class="col-md-6 offset-md-3">Formulaire</h1>

                    <div class="form-group">
                        <label for="profile-pic" class="col-md-2 offset-md-5 file-upload-label">
                            <!-- Image de fond pour le bouton -->
                            <div class="upload-icon text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ajouterqc.svg" alt="Ajouter une photo de profil"></div>
                            
                        </label>
                        <input type="file" id="profile-pic" name="profile-pic" class="file-upload-input">
                    </div>



                    <div class="form-group">
                        <label for="fname" class="col-md-6 offset-md-3">Nom</label>
                        <input type="text" id="fname" name="firstname" placeholder="Ton nom.." >
                    </div>

                    <div class="form-group">
                        <label for="lname">Prénom</label>
                        <input type="text" id="lname" name="lastname" placeholder="Ton prénom" >
                    </div>

                    <!-- Ajout de la checklist pour le genre -->
                    <div class="form-group row">
                        <label class="col-md-3">Genre:</label>
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check form-check-inline custom-radio">
                                <input type="radio" id="femmeRadio" name="gender" value="femme" class="form-check-input custom-radio-input">
                                <label for="femmeRadio" class="form-check-label custom-radio-label">Femme</label>
                            </div>
                            <div class="form-check form-check-inline custom-radio">
                                <input type="radio" id="hommeRadio" name="gender" value="homme" class="form-check-input custom-radio-input">
                                <label for="hommeRadio" class="form-check-label custom-radio-label">Homme</label>
                            </div>
                            <div class="form-check form-check-inline custom-radio">
                                <input type="radio" id="autreRadio" name="gender" value="autre" class="form-check-input custom-radio-input">
                                <label for="autreRadio" class="form-check-label custom-radio-label">Autre</label>
                            </div>
                        </div>
                    </div>


                    <!-- Ajout de la classe "error" si l'adresse e-mail n'est pas valide -->
                    <div class="form-group">
                        <label for="email" class="col-md-6 offset-md-3" style="<?php echo isset($emailError) ? $emailError : ''; ?>">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre e-mail"  required>
                    </div>

                    <!-- Ajout de la classe "error" si le mot de passe est trop court -->
                    <div class="form-group">
                        <label for="password" class="col-md-6 offset-md-3" style="<?php echo isset($passwordError) ? $passwordError : ''; ?>">Mot de passe:</label>
                        <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe"  required>
                    </div>


                    <div class="col-md-8 offset-md-3 form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="motivationCheckbox" name="motivationCheckbox">
                            <label class="form-check-label" for="motivationCheckbox">Je souhaite recevoir de la motivation par mail durant la semaine</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheckbox" name="termsCheckbox" required>
                            <label class="form-check-label" for="termsCheckbox">J'accepte les termes et les conditions d'utilisation</label>
                        </div>
                    </div>

                    <div class="col-md-4 offset-md-4">
        
                        <a href="<?php echo get_template_directory_uri(); ?> /page-formulaire.php" class="btnprimaire">Suivant</a>
                    
                    </div>

                </form>

               

            </div>
        </div>
    </div>
</section>
    </main> 

    

   


<?php get_footer(); ?>