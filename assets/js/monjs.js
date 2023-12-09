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
