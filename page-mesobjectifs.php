<?php
session_start();
if (!isset($_SESSION['mdp'])) {
    $url = home_url('/connexion');
    header("Location: $url");
    exit();
}
?>


<?php
/* Template Name: MesObjectifsPage */


if (!is_user_logged_in()) {
    wp_redirect(home_url() . "/connexion");
    exit;
}

$user = wp_get_current_user();
get_header();
?>

<main>
    <section class="presentationobjectifs">
        <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
            <h1>Mes objectifs, <?php echo esc_html($user->user_login); ?>:</h1>
            <p>Chaque défi atteint est un pas de plus vers une parentalité épanouissante ! Vous avez ça en vous ! <br> Remplissez cette liste d'objectifs afin de ne rien oublier </p>
            </div>
        </div>
        </div>
    </section>

    <section class="objectifs">
        <div id="task-list" class="container text-center">
            <!-- <h2>Mes buts à atteindre</h2> -->
            <ul id="tasks"></ul>
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    
                    <label for="new-task">Mes buts à atteindre :</label>
                    <input type="text" id="new-task" placeholder="Objectif 1"/>
                </div>

                <div class="col-md-5">
                    <label for="deadline">Date :</label>
                    <input type="date" id="deadline" />
                </div>
                <div class="col-md-2 offset-md-5">
                    <button onclick="addTask()" class="btnprimaire">Ajouter</button>
                </div>
            </div>
        </div>
    </section>


</div>

<button class="scrollToTopBtn" onclick="scrollToTop()"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flechehaut.svg" alt="scrolltotop"></button>

</main>

<?php get_footer(); ?>

