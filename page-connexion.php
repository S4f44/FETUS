<?php
/* Template Name: login-new */
if (is_user_logged_in()) {
  // si je suis déjà connecté je suis redirigé vers la page home
  wp_redirect( home_url('/') );
    exit;
}
 
get_header();
// attention c'est important de faire les redirection avant le header sinon la redirection ne marche pas
?>

 
<style>
    body{
        background: linear-gradient(to bottom, #121F40 20%, #8B5576 );
    }

    label {
        /* display: flex; */
        margin-bottom: 8px;
        margin-top: 20px;
        color: #FCF9F9;
        margin-left: 20%;
        margin-right: 20%;
        font-family: 'Montserrat', sans-serif;
        font-size: 30px; 
        text-align: left;

    }

    input {
        width: 60%;
        padding: 8px;
        margin-bottom: 10px;
        margin-left: 20%;
        margin-right: 20%;
        border: none;
        border-bottom: 1px solid #151593;
        background: none;
        color: rgba(21, 21, 147, 0.25); 
        font-family: 'Poppins', sans-serif;
        font-size: 20px; 
    

    }
    input[type="submit"]{
        border-bottom: none;
        margin:auto;
        padding: 8px;
        width: 100%;
    }

    input:hover {
        text-decoration:none;
        color:none;
        
    
    }
    
    .btnprimaire input[type="submit"]{
        text-decoration: none;
        color: #FCF9F9;
        font-family: 'Montserrat', sans-serif;
        font-size: 15pt;
        text-transform: uppercase;
    }

    form {
    
        width: auto; /* Largeur du formulaire */
        background-color: rgba(255, 255, 255, 0.3); /* Couleur blanche avec une opacité de 0.7 */
        padding: 90px 10px; /* Ajout de marge interne pour espacer les éléments du formulaire du bord */
        border-radius: 300px; /* Coins arrondis pour le formulaire */
        box-sizing: border-box; /* Inclure le padding et la bordure dans la largeur totale */
        margin-bottom: 90px;
        
    }
    .mot-de-passe-oublie, 
    .inscription {
        color: #151593;
        text-decoration: none;
        display: inline-block;
        
    }
    


    /************************RESPONSIVE ******************************/
    @media screen and (max-width: 767px) {


    .mot-de-passe-oublie, 
    .inscription {
        font-size: 13px;
    }

    label {
        font-size: 18px; 
    }

    input {
        font-size: 13px;
    }

    .btnprimaire input[type="submit"]{
        font-size: 12pt;
    }

    }


</style>

<div class="container text-center">
  <br><br><br><br><br><br>
  <form action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">

    <h1> Connexion </h1>

    <br> 
        <label for="log">Adresse e-mail</label>
        <input type="text" name="log" id="log" placeholder="Entrer votre adresse mail..." value="<?php echo esc_attr( $user_login ); ?>">
       
        <label for="pwd">Mot de passe</label>
        <input type="password" name="pwd" id="pwd" placeholder="Entrer votre mot de passe...">
       
        <div class="btnprimaire">
            <input type="submit" name="submit" value="Se connecter">
            <input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url('/monsuivi') ); ?>">
        </div>

        <div class="col-md-12 text-center mt-2 bontonlien">
            <a href="mot_de_passe_oublie.php" class="mot-de-passe-oublie">Mot de passe oublié ?</a> / <a href="<?= home_url('/enregistrer'); ?>" class="inscription">S'inscrire</a>
        </div>
    </form>
        
 
</div>
 
<?php get_footer(); ?>