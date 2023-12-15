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
