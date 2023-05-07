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

function newEvent(e){
    var validated = eventPreventInputs()
    
    if(validated === true){
        e.preventDefault();

        var form = $("#new-event-form");
      
        $.ajax({
            type: "POST",
            url: "modules/new-event",
            data: form.serialize(),
            success: function(data){
                
            }
        });
    }
}

function eventPreventInputs(){
    if($('#name-event').val() != '' && $('#name-event').val().length >= 5){
        if($('#start-event-date').val() != '' && $('#start-event-date').val() > $('#end-event-date').val()){
            if($('#end-event-date').val() != '' && $('#end-event-date').val() < $('#start-event-date').val()){
                if($('#unique-lot-check')[0].checked == true){
                    if($('#lot-sell').val() > 0 && $('#lot-sell').val() != ''){

                    }else{
                        return 'ERR00007';
                    }
                }else if($('#manual-value-lot-check')[0].checked == true){
                    for(var iterator = 0; i < $('.manual-inputs .group-lot').children().length; iterator++){
                        if($('.manual-inputs .group-lot').children()[iterator]){
                            
                        }
                    }
                }
            }else{
                return 'ERR00006';
            }
        }else{
            return 'ERR00005';
        }
    }else{
        return "ERR00004";
    }
}

function defineLotConfig(element){
    var id = element.id

    if(id == "unique-lot-check"){
        $('#manual-value-lot-check').attr("disabled","disabled")
        $('#lot-units').attr("disabled","disabled")
        $('#lot-percent').attr("disabled","disabled")
        if(!element.checked){
            $('#manual-value-lot-check').removeAttr("disabled","disabled")
            $('#lot-units').removeAttr("disabled","disabled")
            $('#lot-percent').removeAttr("disabled","disabled")
        }
    }else if(id == "manual-value-lot-check"){
        $('#unique-lot-check').attr("disabled","disabled")
        $('#lot-percent').attr("disabled","disabled")
        $('#lot-sell').attr("disabled","disabled")
        if(!element.checked){
            $('#unique-lot-check').removeAttr("disabled","disabled")
            $('#lot-percent').removeAttr("disabled","disabled")
            $('#lot-sell').removeAttr("disabled","disabled")
        }
    }else if(id == "lot-units"){
        if($('#manual-value-lot-check')[0].checked == true){
            $('.manual-inputs').removeClass('d-none')
            $('.percent-demo').addClass('d-none')

            if($('#lot-units').val() == 0 || $('#lot-units').val() == ''){
                $('.manual-inputs').addClass('d-none')
            }
        }else{
            $('.percent-demo').removeClass('d-none')
            $('.#manual-inputs').addClass('d-none')

            if($('#lot-units').val() == 0 || $('#lot-units').val() == ''){
                $('.percent-demo').addClass('d-none')
            }
        }
    }
}