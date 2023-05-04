(function ($) {
  "use strict";

  $(window).on("load", function () {
    // PreLoader Init
    function preLoader() {
      $("body").addClass("loaded");
      $(".preloader-wrapper").addClass("loaded");
    }
    preLoader();
  });

  $(document).ready(function () {
    // navbarToggle Init
    function navbarToggle() {
      $(".nav-toggle").on("click", function () {
        $(".sidenav").toggleClass("show");
        $(".nav-toggle span").toggleClass("fa-times fa-bars");
        $(".nav-toggle-overlay").toggleClass("show");
      });
      $(".nav-toggle-overlay").on("click", function () {
        $(".sidenav").removeClass("show");
        $(".nav-toggle span").toggleClass("fa-bars fa-times");
        $(".nav-toggle-overlay").removeClass("show");
      });
    }
    navbarToggle();

    // form validation (only for this page)
    window.addEventListener(
      "load",
      function () {
        var forms = document.getElementsByClassName("needs-validation");
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add("was-validated");
            },
            false
          );
        });
      },
      false
    );
  });
})(jQuery);

$('.click_fademe').click(() => {
  $('.click_fademe').fadeOut('fast', () => {
    $('.click_fademe').removeClass('d-block')
  })
})

function newEvent(){
    var validated = eventPreventInputs()
    
    if(validated === true){
        
    }
}

function eventPreventInputs(){
    if($('#name-event').val() != '' && $('#name-event')vel().length >= 5){
        if($('#start-event-date').val() != '' && $('#start-event-date').val() > $('#end-event-date').val()){
            
        }else{
            return 'ERR000005';
        }
    }else{
        return "ERR000004";
    }
}