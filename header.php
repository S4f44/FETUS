<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FetUs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/monstyle.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body>  <?php body_class(); ?> 
        <?php wp_body_open(); ?>


<!------------------HEADER----------------->

<!-- <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(['theme_location' => 'header']); ?>
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> --> 




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

            <?php wp_nav_menu(['theme_location' => 'header']); ?> 
                            <?php wp_nav_menu([
                                'theme_location' => 'header', // localisation de mon menu
                                'container' => false, // permet de retirer mon container
                                'menu_class' => 'navbar-nav me-auto' // la classe que je veux dans mon <ul></ul>
                                ]); ?>

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                    

                    <a class="nav-link" href="page-toutsavoir.php">Tout savoir sur<br> la grossesse</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="conseils.php">Conseils</a>
                    </li>
                     <!-- ESPACE AVANT LE LOGO -->
                    <li class="nav-item space-between"></li>

                    <!-- LOGO (CENTRÉ) -->
                    <a class="navbar-brand d-none d-lg-block mx-auto" href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo"> 
                    </a>

                    <!-- ESPACE APRÈS LE LOGO -->
                    <li class="nav-item space-between"></li>

                    <li class="nav-item">
                        <a class="nav-link" href="monsuivi.php">Mon suivi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mesobjectifs.php">Mes objectifs</a>
                    </li>
                </ul> 
            </div>
        </div>
    </nav> 

    <div class="container"> 
</header>