
(function ($) {

    // On DOM Load
    $(document).ready(function () {

        // Mobile menu Open
        $(".mobile__menu-trigger").click(function () {
            $(".mobile__menu").addClass("active");
            $("body").css("overflow", "hidden");
        });

        // Mobile Menu Close
        $(".mobile__menu-close-btn").click(function () {
            $(".mobile__menu").removeClass("active");
            $("body").css("overflow", "auto");
        });

        // Mobile Menu Dropdown
        $(".mobile__menu-dropdown-btn").click(function () {
            $(this).closest("li").siblings("li").removeClass("active");
            $(this).closest("li").siblings("li").find("ul").first().slideUp(150);
            $(this).closest("li").toggleClass("active");
            $(this).siblings("ul").slideToggle(150);
        });

        // Header fixed;
        $(window).scroll(function(){
              if ($(this).scrollTop() > 37) {
                  $('.theme__header').addClass('theme__header-fixed');
              } else {
                  $('.theme__header').removeClass('theme__header-fixed');
              }
        });

    });

})(jQuery);
