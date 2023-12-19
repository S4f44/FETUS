/////////////////////////////SCROLL NAVBAR////////////////////////////////////
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolling');
        } else {
            $('.navbar').removeClass('scrolling');
        }
    });
});
////////////////////////////CAROUSEL FRUITS///////////////////////////////////
$(function() {
    $(".js-links a").on("click", function(event) {
        event.preventDefault();

        let stepIndex = $(this).data("index"); /*stock l'élément step selector et se base sur le stepindex */
        let stepSelector = "[data-index='" + stepIndex + "']";

        $(".js-links a, .js-images img, .js-text article").removeClass("active");
        /*$(".js-links.active, .js-images.active, .js-text.active").removeClass("active");*/
      
        $(this).addClass("active");
        $(stepSelector, ".js-images, .js-text").addClass("active");
    });
});

////////////////////////////TO DO LIST MES OBJECTIFS ///////////////////////////////////
function addTask() {
    var newTask = document.getElementById('new-task').value;
    var deadline = document.getElementById('deadline').value;
    var tasksList = document.getElementById('tasks');

    if (newTask !== '' && deadline !== '') {
        var listItem = document.createElement('li');
        listItem.innerHTML = `<input type="checkbox" onclick="toggleTask(this)"> <strong>${newTask}</strong> - Deadline: ${deadline}`;
        
        // Ajoutez une classe pour les tâches de l'utilisateur
        listItem.classList.add('user-task');
        
        tasksList.appendChild(listItem);

        // Réinitialiser les champs
        document.getElementById('new-task').value = '';
        document.getElementById('deadline').value = '';
    } else {
        alert('Veuillez remplir tous les champs.');
    }
}
function toggleTask(checkbox) {
    var listItem = checkbox.parentNode;
    if (checkbox.checked) {
        listItem.classList.add('done');
    } else {
        listItem.classList.remove('done');
    }
}

/////////////////////////////////////////////////////////S'ENREGISTRER //////////////////////////////////////////////////

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
            this.action = "<?php echo get_template_directory_uri(); ?>/page-monsuivi.php";
        } else if (condition2) {
            this.action = "<?php echo get_template_directory_uri(); ?>/page-mesobjectifs.php";
        } else {
            // Par défaut, utilisez cette action si aucune condition n'est remplie
            this.action = "<?php echo get_template_directory_uri(); ?>/page-formulaire.php";
        }

        // Vous pouvez également ajouter d'autres logiques de traitement ici si nécessaire

        return true; // Permet la soumission du formulaire
    })



    ///////////////////////////////////////////////BOUTON SCROLL VERS LE HAUT/////////////////////////////////////
    // Fonction pour afficher ou masquer le bouton en fonction de la position de défilement
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Affiche ou masque le bouton en fonction de la position de défilement
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

// Fonction pour faire défiler la page vers le haut
function scrollToTop() {
    document.body.scrollTop = 0; // Pour les navigateurs Safari
    document.documentElement.scrollTop = 0; // Pour les autres navigateurs
}


/////////////////////////////////////////////DEFILEMENT MOT D'ENCOURAGEMENT MON SUIVI///////////////////////////////////

document.addEventListener("DOMContentLoaded", function() {
    // Récupérez toutes les balises h3 avec la classe "scrolling-h3"
    var h3Elements = document.querySelectorAll('.scrolling-h3');

    // Index actuel du titre affiché
    var currentIndex = 0;

    // Changez le titre toutes les 3 secondes
    setInterval(function() {
        // Masquez tous les titres
        h3Elements.forEach(function(element) {
            element.style.display = 'none';
        });

        // Affichez le titre suivant
        h3Elements[currentIndex].style.display = 'block';

        // Passez au titre suivant
        currentIndex = (currentIndex + 1) % h3Elements.length;
    }, 3000);
});

