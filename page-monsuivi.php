<?php
//session_start();
// if (!isset($_SESSION['mdp'])) {
//     $url = home_url('/connexion');
//     header("Location: $url");
//     exit();

?>


<?php
/* Template Name: MonSuiviPage */
// page-monsuivi.php
// session_start();

// Vérifiez si l'utilisateur est connecté
// if (!is_user_logged_in()) {
//     // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
//     wp_redirect(home_url('/login/'));
//     exit;
// }


/*Mon suivi pag*/

if (!is_user_logged_in()) { // je vérifie si je suis connecté
    wp_redirect( home_url() . "/login" ); // si pas je redirige vers la page login
    exit;
}

$user = wp_get_current_user();
// var_dump($user);

get_header(); // j'importe mon header
// attention c'est important de faire les redirection avant le header sinon la redirection ne marche pas
?>


<?php 
    //$user = wp_get_current_user();
    //
?>
  
  
<style>
    body{
        background: linear-gradient(to bottom, #3e567a 5%, #FCF9F9, #121F40 );
    }
    .navbar {
    background-color: #3e567a;
    }
   
</style>

<main>

                


    <section class="presentationttsav">
        <div class="container ">
            <div class="row">

                <!------------BOUTON DECONNEXION------------->
                    
                
                <div class="col-md-3 offset-md-9 text-center ">
                    <a href="<?= home_url('/deconnexion'); ?>" >  
                         <button class=" btndeconnexion ">
                            Se déconnecter
                        </button>     
                    </a> <br><br><br>
                </div>
                <!------------FIN BOUTON DECONNEXION------------->

                <h1 class="text-center">Mon suivi</h1> <br><br>
                    <div class="profil">
                        
                        <div class="photoprofil">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/heloise.svg" alt="photo de profil">
                        </div>
                    
                    
                        <div class="textprofil">
                            <h3>Nom</h3>
                            <p class="offset-md-1">Lopez</p>

                            <h3>Prénom</h3>
                            <p class="offset-md-1"><?php echo esc_html($user->user_login); ?></p>

                            <h3>Stade de la grossesse</h3>
                            <p class="offset-md-1">4 ième semaine</p>
                        </div>

                
                        <div class="imagebb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagebb.svg" alt="image bebe">
                        </div>

                        <div class="textbb">
                            <h3>Futur prénom</h3>
                            <p class="offset-md-1">-</p>

                            <h3>Sexe</h3>
                            <p class="offset-md-1">-</p>
                        </div> 

                    </div> 
            </div>
        </div>
    </section>





    <section class="fruits">
        <div class="container text-center py-3">
            <h2>Actuellement, votre bébé fait la taille d'un(e)... </h2>        
            <div class="my-row row">

                <div class="col-md-6 offset-md-1">
                    <div class="text js-text">

                        <article class="active" data-index="step-1">
                            <h3>Petit pois</h3>
                            <p> 4 semaines</p>
                                <div class="col-md-7 offset-md-3 pota">
                                    <p>  
                                        <strong>Poids :</strong> Environ 0,004 gramme (4 milligrammes).<br>
                                        <strong>Taille :</strong> Environ 0,1 mm.
                                    </p> 
                                </div>
                            <p> La quatrième semaine marque le début de l'organogenèse, où les premiers tissus et organes du fœtus commencent à se former à partir des trois feuillets embryonnaires. Le blastocyste s'implante dans l'utérus. </p>
                        </article>
                
                    </div>
                </div>
    
                <div class="col-md-4 offset-md-1">
                    <div class="images js-images">        
                        <img data-index="step-1" class="active" src="<?php echo get_template_directory_uri() ?>/assets/img/pttpois.svg" alt="petit pois" class="grpttpois">
                    </div>
                </div>

            </div>
            </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <a href="<?php echo home_url(); ?>/toutsavoir" class="btnprimaire"> En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

        <section class="premiertri">
            <div class="container text-center">
                <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <div class="txtconseilsmonsuivi">
                        <h2>Quelques conseils à prendre en compte lors de ce premier trimestre </h2><br>
                        
                        <ul class="custom-list">
                            <li>Accordez vous beaucoup de repos et du temps pour vous !</li><br>
                            <li>Éviter les déclencheurs olfactifs pour minimiser les nausées et l'hypersensibilité.</li><br>
                            <li>Restez dans un environnement calme et apaisant pour atténuer la fatigue et favoriser le bien-être.</li><br>
                            <li>Renseignez vous sur les effets des hormones telles que l'HCG, l'œstrogène et la progestérone sur les nausées et la fatigue.</li><br>
                        </ul>
                        </div>
                        <a href="<?php echo home_url(); ?>/conseil" class="btnprimaire"> Voir plus de conseils</a>
                    </div>
                    </div>
                </div>
        </section>

        <section class="encouragementcarousel">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel-container">
                            <div class="carousel-item">Accordez-vous le repos nécessaire. Vous êtes en train de bâtir les fondations de quelque chose d'extraordinaire. Prenez soin de vous.</div>
                            <div class="carousel-item">Les débuts peuvent sembler un peu tumultueux, mais n'oubliez pas que chaque vague apporte quelque chose de nouveau. Vous naviguez bien.</div>
                            <div class="carousel-item">Les hauts et les bas des nausées matinales sont comme des virages serrés sur la route de la maternité. Accrochez-vous, vous êtes en plein rodéo !</div>
                            <div class="carousel-item">Votre première étape est lancée, et c'est une mission spéciale : créer une vie. Continuez à avancer avec détermination.</div>
                            <div class="carousel-item">Chaque jour est une pierre supplémentaire dans la construction de votre parcours parental.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</main>


<?php


// $user = wp_get_current_user();
// var_dump($user);


get_footer(); // J'importe mon pied de page 
