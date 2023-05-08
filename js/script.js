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
    }else if(validated.indexOf('ERR') != -1){
        showModalError()
    }
}

function newAddessToEvent(element){
    if($('.new-address-inputs')[0].classList.contains('d-none')){
        element.textContent = 'x'
        $('.new-address-inputs').removeClass('d-none')
        $('#cep-house').focus()
    }else{
        $('.new-address-inputs').addClass('d-none')
        element.textContent = '+'
        $('#place-event').focus()
    }
}

function eventPreventInputs(){
    if($('#name-event').val() != '' && $('#name-event').val().length >= 5){
        if($('#start-event-date').val() != '' && Number($('#start-event-date').val()) > Number($('#end-event-date').val())){
            if($('#end-event-date').val() != '' && (Number($('#end-event-date').val()) < Number($('#start-event-date').val()))){
                if($('#unique-lot-check')[0].checked == true){
                    if($('#lot-sell').val() > 0 && $('#lot-sell').val() != ''){
                        if($('#description-event').val() != '' && $('#description-event').val().length >= 15){
                            if($('#place-event').val() != ''){
                                return true;
                            }else{
                                return 'ERR00013';
                            }
                        }else{
                            return 'ERR00011';
                        }
                    }else{
                        return 'ERR000009';
                    }
                }else if($('#manual-value-lot-check')[0].checked == true){
                    for(var iterator = 0; iterator < $('.manual-inputs .group-lot').length; iterator++){
                        if($('.manual-inputs .group-lot')[iterator].children[0].children[0].children[1].value != '' && $('.manual-inputs .group-lot')[iterator].children[0].children[0].children[1].value.length >= 1){
                            if(iterator>=1){
                                if(Number($('.manual-inputs .group-lot')[iterator].children[0].children[0].children[1].value) > Number($('.manual-inputs .group-lot')[iterator-1].children[0].children[0].children[1].value)){
                                    if($('.manual-inputs .group-lot')[iterator].children[1].children[0].children[1].value != ''){
                                        if(Number($('.manual-inputs .group-lot')[iterator].children[1].children[0].children[1].value) > Number($('.manual-inputs .group-lot')[iterator-1].children[1].children[0].children[1].value)){
                                            if($('#description-event').val() != '' && $('#description-event').val().length >= 15){
                                                if($('#place-event').val() != ''){
                                                    return true;
                                                }else{
                                                    return 'ERR00020';
                                                }
                                            }else{
                                                return 'ERR00019';
                                            } 
                                        }else{
                                            return 'ERR00018';
                                        }
                                    }else{                                        
                                        return 'ERR00017';
                                    }
                                }else{
                                    return 'ERR00015';
                                }
                            }
                        }else{
                            return 'ERR00010';
                        }
                    }
                }else{  
                    if($('#lot-units').val() != '' && $('#lot-units').val().length >= 1){
                        if($('#lot-sell').val() != '' && $('#lot-sell').val().length >= 1){
                            if($('#lot-percent').val() != '' && $('#lot-percent').val().length >= 1){
                                if($('#description-event').val() != '' && $('#description-event').val().length >= 15){
                                    if($('#place-event').val() != ''){
                                        return true;
                                    }else{
                                        return 'ERR00016';
                                    }
                                }else{
                                    return 'ERR00014';
                                }
                            }else{
                                return 'ERR00012';
                            }
                        }else{
                            return 'ERR00008';
                        }
                    }else{
                        return 'ERR00007';
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

let $modal = $(".modal");
$modal.draggable({
    handle: ".modal-header",
    start: function() {
        $(this).removeClass('backdrop-blur')
    },
    stop: function() {
        $(this).animate({
            top: "0px",
            left: "0px"
        }, function(){
            $(this).addClass('backdrop-blur')
        });
    
    },
});