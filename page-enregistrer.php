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
                <form action="/action_page.php">

                    <h1 class="col-md-6 offset-md-3">Identification</h1>

                    <label for="fname" class="col-md-6 offset-md-3">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.."> 
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.."> 
                
                    <label>
                      <input type="radio" name="options" value="femme"> <p>Femme</p>
                    </label>
                    <label>
                      <input type="radio" name="options" value="homme"> <p>Homme</p> 
                    </label>
                    <label>
                      <input type="radio" name="options" value="autre"> <p>Autre</p>
                    </label>


                <label for="email">Enter your email:</label>
                <input type="email" id="email" name="email" placeholder="@gmail.be">

                     <div class="col-md-2 offset-md-5 "><a href="<?php echo get_template_directory_uri(); ?>/formulaire" class="btnprimaire">Suivant</a> </div>

                    </form> 

                      

                </div>
                </div>
            </div>
        </section>
    </main> 
    


<?php get_footer(); ?>
      
    
    
   