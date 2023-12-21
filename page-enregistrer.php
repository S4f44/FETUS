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
        <div class="container ">

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


</header>


<?php
/* Template Name: enregistrer */ 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Le formulaire a été soumis, vous pouvez effectuer des vérifications ici si nécessaire
    
    // Redirige vers la page formulaire.php
    wp_redirect(home_url('/formulaire'));
    exit;
}
?>

<!------------------MAIN----------------->
   <main>

   <!-- ?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Initialisation des variables d'erreur
    $emailError = '';
    $passwordError = '';

    // Vérification de la validité de l'adresse e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@(.*\.(be|fr|com))$/', $email)) {
        $emailError = 'color: red;';
    }

    // Vérification de la longueur minimale du mot de passe
    if (strlen($password) < 8) {
        $passwordError = 'color: red;';
    }

    // Traitement de la photo de profil
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile-pic"]["name"]);
    move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $target_file);

    // Exemple d'affichage des données (remplacez cela par votre logique métier)
    echo "Nom: $firstname $lastname <br>";
    echo "Genre: $gender <br>";
    echo "Email: $email <br>";
    echo "Mot de passe: $password <br>";
    echo "Photo de profil: $target_file <br>";
}
?> -->

<br> <br> <br> <br> <br> <br>
<section>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 formulaire">
                <form action="/page-monsuivi.php"  action="/page-mesobjectifs.php"  action="/page-formulaire.php" action="/page-connexion.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <h1 class="col-md-6 offset-md-3">Identification</h1>

                    <div class="form-group">
                        <label for="profile-pic" class="col-md-2 offset-md-5 file-upload-label">
                            <!-- Image de fond pour le bouton -->
                            <div class="upload-icon text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ajouterqc.svg" alt="Ajouter une photo de profil"></div>
                            
                        </label>
                        <input type="file" id="profile-pic" name="profile-pic" class="file-upload-input">
                    </div>



                    <div class="form-group">
                        <label for="fname" class="col-md-6 offset-md-3 customlab">Nom</label>
                        <input type="text" id="fname" class="custom" name="firstname" placeholder="Ton nom..." >
                    </div>

                    <div class="form-group">
                        <label for="lname" class="col-md-6 offset-md-3 customlab">Prénom</label>
                        <input type="text" id="lname" class="custom" name="lastname" placeholder="Ton prénom..." >
                    </div>

                    <!-- Ajout de la checklist pour le genre -->
                    <div class="form-group row">
                        <label class="col-md-6 offset-md-3 customlab" >Genre:</label>
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
                        <label for="email" class="col-md-6 offset-md-3 customlab" style="<?php echo isset($emailError) ? $emailError : ''; ?>">E-mail:</label>
                        <input type="email" id="email" class="custom" name="email" placeholder="Entrez votre e-mail..."  required>
                    </div>

                    <!-- Ajout de la classe "error" si le mot de passe est trop court -->
                    <div class="form-group">
                        <label for="password" class="col-md-6 offset-md-3 customlab" style="<?php echo isset($passwordError) ? $passwordError : ''; ?>">Mot de passe:</label>
                        <input type="password" id="password" class="custom" name="password" placeholder="Entrer votre mot de passe..."  required>
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

                    <div class="col-md-4 offset-md-5">
        
                    <a href="formulaire" class="btnprimaire">Suivant</a>

                    
                    </div>

                </form>

                <!-- <script>
                    function validateForm() {
                        // Vérification de la validité des champs
                        var email = document.getElementById('email').value;
                        var password = document.getElementById('password').value;

                        if (!validateEmail(email) || password.length < 8) {
                            alert('Veuillez remplir tous les champs correctement.');
                            return false; // Ne retournez false que si la validation échoue
                        }

                        // Si tout est valide, permet la soumission du formulaire
                        return true;
                    }

               
                    /////////////////////////garder les données sur le site////////////////////////////////////

                        document.getElementById("myForm").addEventListener("submit", function(event) {
                            // Récupération des valeurs nécessaires pour décider de l'action
                            var condition1 = true;  // Mettez ici votre première condition
                            var condition2 = false; // Mettez ici votre deuxième condition

                            // Sélection de l'action en fonction des conditions
                            if (condition1) {
                                this.action = "<?php //echo get_template_directory_uri(); ?>/page-monsuivi.php";
                            } else if (condition2) {
                                this.action = "<?php //echo get_template_directory_uri(); ?>/page-mesobjectifs.php";
                            } else {
                                // Par défaut, utilisez cette action si aucune condition n'est remplie
                                this.action = "<?php //echo get_template_directory_uri(); ?>/page-formulaire.php";
                            }

                            // Vous pouvez également ajouter d'autres logiques de traitement ici si nécessaire

                            return true; // Permet la soumission du formulaire
                        });
                    </script> -->

            </div>
        </div>
    </div>
</section>

    </main> 
    


<?php get_footer(); ?>
      
    
    
   