


<?php
session_start();

if(isset($_POST['envoi'])){
    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = ($_POST['mdp']);
 
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
        $recupUser->execute(array($email, $mdp));
 
        if($recupUser->rowCount() > 0){
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            $profil_url = home_url('/monsuivi');
        header("Location: $profil_url");
        exit();
        } else {
            echo "Votre mot de passe ou email est incorrect";
        }
    }else{
        echo "Veuillez compléter tous les champs";
    }
}
?>