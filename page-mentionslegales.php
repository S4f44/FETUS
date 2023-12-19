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


<main>

<section class="presentationml">
    <div class="container text-center">
      <div class="row">
        
        <h1 class="col-md-12">Mentions légales</h1>
       
      </div>
    </div>
  </section>


  <!------------------- tableau mentions légales infos obligatoires  ----------------->

  <section class="tableauinfoml">
      <div class="container text-center">
          <div class="row">
            <div class="col-md-10 offset-md-2">
            
              <table>
                <tr class="custom-tr">
                  <th class="custom-th col-md-2 offset-md-2">Nom de la société</th>
                  <td class="custom-td col-md-3 ">Fetus SRL</td>
                </tr>
                <tr class="custom-tr">
                  <th class="custom-th col-md-2 offset-md-2">Forme juridique</th>
                  <td class="custom-td col-md-3">SRL (société à responsabilité limitée)</td>
                </tr>
                <tr class="custom-tr">
                  <th class="custom-th col-md-2 offset-md-2">Adresse postale</th>
                  <td class="custom-td col-md-3 ">Rue de la poste 111, 1030 Bruxelles</td>
                </tr>
                <tr class="custom-tr">
                  <th class="custom-th col-md-2 offset-md-2">E-mail</th>
                  <td class="custom-td col-md-3 ">fetusisfsc@gmail.com</td>
                </tr>
                <tr class="custom-tr">
                  <th class="custom-th col-md-2 offset-md-2">Téléphone</th>
                  <td class="custom-td col-md-3 ">04 88 38 45 03</td>
                </tr>
                <tr class="custom-tr">
                  <th class="custom-th col-md-2 offset-md-2">Numéro BCE</th>
                  <td class="custom-td col-md-3 ">BE346 789 987</td>
                </tr>
              </table>

            </div>
          </div>
      </div>
  </section>

  
        
<!------------------- Collecte d'info  ----------------->
            
      
  <section class="collecte">
      <div class="container text-left">
        <div class="row">
          <div class="col-md-6 offset-md-2">
            <h2>Collecte d'information</h2>
          </div> 
          <div class="col-md-12">
            <p>Votre vie privée compte pour nous, ci-dessous voici les informations concernant le traitement de celles-ci et de vos informations personnelles. <br> <br> Concernant la collecte, l’utilisation et la divulgation de vos informations que nous collectons lorsque vous utilisez notre site web (https://fetus.emu.isfsc.be). En accédant ou en utilisant le Service, vous consentez à la collecte, à l’utilisation et à la divulgation de vos informations conformément à cette politique de confidentialité. Si vous ne consentez pas à cela, veuillez ne pas accéder ou utiliser le Service. Si votre compte est supprimé, vos données ne seront plus accessibles et seront supprimées après la période de stockage obligatoire, sauf si vous avez expressément consenti à l’utilisation ultérieure de celles-ci. La suppression de votre compte peut être demandée à tout moment par mail à l’adresse de contact suivante : hello@fetus.be. Vous pouvez aussi nous demander les informations que nous détenons sur vous avec cette adresse mail.</p>
          </div>
        </div>
      </div>
  </section>


<!------------------- +++  ----------------->

    <section class="colinfo">
      <div class="container text-left">
          <div class="row">
            
            <!-- <h3 class="col-md-7 offset-md-2">Informations que nous collectons sur vous</h3> -->

            <div class="col-md-10 offset-md-1">
              <h3>Informations que nous collectons sur vous</h3>
              <p>Nous collectons et traitons les données suivantes :</p>
            </div>

            <div class="col-md-6 offset-md-2">
                <ul class="custom-list">
                  <li>Nom</li>
                  <li>Prénom</li>
                  <li>Adresse mail</li>
                  <li>Stade de la grossesse</li>
                  <li>Genre</li>
                </ul>
            </div>

            <div class="col-md-10 offset-md-1">
              <h3>Comment nous utilisons vos informations</h3>
              <p >Nous utiliserons les informations que nous collectons à votre sujet aux fins suivantes :</p>
            </div>
            
            <div class="col-md-6 offset-md-2">
                  <ul class="custom-list">
                    <li>Création de compte utilisateur personnalisé</li>
                    <li>Enregistrement de votre stade de grossesse </li>
                    <li>Administration</li>
                    <li>Gestion de comptes utilisateurs</li>
                  </ul>
            </div>
            <div class="col-md-12">
              <p>Si nous souhaitons utiliser vos informations à d’autres fins, nous vous demanderons votre consentement et n’utiliserons vos informations qu’à la réception de votre consentement et uniquement pour les fins pour lesquelles vous avez donné votre consentement, sauf si nous sommes tenus de le faire par la loi.</p>
            </div>

          </div>
        </div>
      </section>

<!------------------- fin de la page  ----------------->

      <section class="mlfin">
        <div class="container text-left">
          <div class="row">
                <p>Si vous avez des questions ou des préoccupations concernant le traitement de vos informations veuillez nous contacter par email à l’adresse <strong>fetusisfsc@gmail.com</strong>. Nous traiterons vos préoccupations conformément à la loi en vigueur. <br> <br> <br></p>

                <blockquote class="container text-center">
                  <p>© FetUs, tous les droits réservés</p>
                </blockquote>

          </div>
        </div>
      </section>


      <button class="scrollToTopBtn" onclick="scrollToTop()"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flechehaut.svg" alt="scrolltotop"></button>

    </main>

<?php get_footer(); ?>