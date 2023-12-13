<?php get_header(); ?>

<section class="erreur">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-5">
                <h1>Page introuvable</h1>
                <h3> Oups ! </h3>
                    <p> Il n'y a rien a voir ici retournez à <a href="<?php echo home_url('/'); ?>">la page d'accueil</a> </p>
            </div>
        <div class="col-md-7"> 
            <div class="erreursvg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.svg">
            </div>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>