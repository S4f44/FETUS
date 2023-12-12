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
<body>


<!------------------HEADER----------------->
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand d-lg-none" href="index.php">
                <img src="assets/img/logo.svg" alt="logo FetUs">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

            <?php wp_nav_menu(['theme_location' => 'header']); ?>

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="toutsavoir.php">Tout savoir sur<br> la grossesse</a>
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
  </header>