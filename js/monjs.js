$(function() {
    $(".js-links a").on("click", function(event) {
        event.preventDefault();

        let stepIndex = $(this).data("index");
        let stepSelector = "[data-index='" + stepIndex + "']";

        $(".js-links a, .js-images img, .js-text article").removeClass("active");

        $(this).addClass("active");
        $(stepSelector).addClass("active");
    });
});
