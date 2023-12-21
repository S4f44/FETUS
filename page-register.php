<!-- ?php
/* Template Name: RegistrationPage */
if (is_user_logged_in()) {
  wp_redirect( home_url('/monsuivi') );
	exit;
}
// attention c'est important de faire les redirection avant le header sinon la redirection ne marche pas
?> -->
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
 <br> <br> <br>
<section>
    <div class="container">
        <div class="row">
            <div class="formulaire">
                <form>

                    <h1 class="col-md-12  text-center">Formulaire</h1> <br> <br>

                    <div class="form-group row">
                        <label class="offset-md-2 customlab" >Qui êtes-vous?</label>
                        <div class="col-md-12 text-center quietesvous">
                            <div class="form-check form-check-inline custom-radio">
                                <input type="radio" id="femmeRadio" name="gender" value="femme" class="form-check-input custom-radio-input">
                                <label for="femmeRadio" class="form-check-label custom-radio-label">La future maman</label>
                            </div>
                            <div class="form-check form-check-inline custom-radio">
                                <input type="radio" id="hommeRadio" name="gender" value="homme" class="form-check-input custom-radio-input">
                                <label for="hommeRadio" class="form-check-label custom-radio-label">Le futur papa</label>
                            </div>
                            
                        </div>
                    </div> 


                    <div class="form-group">
                        <label for="semaines" class="col-md-8 customlab">Indiquez le nombre de semaines de grossesse que vous ou votre partenaire avez atteint:</label><br> <br>
                        <select id="semaines" name="semaines" >
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
            <br> <br>
                    </div>
                    

                    <div class="col-md-12">
        
                    <a href="<?php echo home_url('/connexion'); ?>" class="btnprimaire">Valider</a>

                    
                    </div>

                </form>

                

            </div>
        </div>
    </div>
</section>







  <!-- <section>
      <div class="container text-center">
          <div class="row">

              <div class="formulaire">

                  <form>

                      <h1 class="col-md-6 offset-md-3">Formulaire</h1>


                    
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
                    


                     
                      <div class="btnprimaire">
                        <input type="submit" name="submit" value="Valider">
                        <input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url('/connexion') ); ?>">
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </section> -->




</main> 
<?php get_footer(); ?>



