$(function() {

  setTimeout(function() {
      $("#preloader").fadeOut("slow");
      $('body').removeClass('overflow-h');
  }, 1500)

  /*-------------------------------------
    Mob-menu
  -------------------------------------*/
  $('#mob-burger').on('click', function(e){
    $(this).toggleClass('active');
    $('body').toggleClass('overflow-h');
    $('#header').toggleClass('active');
  });
  

  $('.main-slider').slick({
    speed: 500,
    fade: true,
    infinite: true,
    // autoplay: true,
    dots: true,
    autoplaySpeed: 2000,
    arrows: false,
  }); 

  //Partners-slide 
  $('#partners-slide').slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });

  $('#exchange').slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });


  $('.offer-slider').slick({
    variableWidth: true,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    arrows: false,
    infinite: false,
    centerPadding: '0',
    speed: 500,
    responsive: [
    {
      breakpoint: 998,
      settings: {
        dots: true,
      }
    },
    ]
  });

  $('#why-lenders-slider').slick({
    slidesToShow: 1,
    // variableWidth: true,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    arrows: false,
    dots: true,
    centerPadding: '0',
    speed: 500,
  });

  //Cases
  $('#cases-slide').slick({
    variableWidth: true,
    // slidesToShow: 4,
    slidesToScroll: 1,
    // centerMode: true,
    // autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    arrows: false,
    variableWidth: true,

    centerPadding: '0',
    speed: 500,

  });

  //Rating
  $('#rating-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    // autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    arrows: false,
    
    centerPadding: '0',
    speed: 500,
    responsive: [
    {
      breakpoint: 998,
      settings: {
        slidesToShow: 1,
        variableWidth: true,
        centerMode: false,
        dots: true,
      }
    }
    ]
  });

  // tabs
  $(".tab-wrapper .tab").on("click", "a", function (event) {
    event.preventDefault();
    var tab = $(this).attr("data-tab");
    $(this).closest('.tab-wrapper .tab').find('a').removeClass('active');
    $(this).addClass('active');  

    $(this).closest('.tab-wrapper').find(".tab-content").hide();
    $(this).closest('.tab-wrapper').find(".tab-content[data-tab = " + tab + "]").show();

  });

  //Accordion
  $('.accordion-js .accordion-btn-js').click(function(e) {
      var dropDown = $(this).closest('.accordion-js').find('.accordion-contant-js');
      $(this).toggleClass('open');
      $(this).html() == "Развернуть" ? $(this).html('Свернуть') : $(this).html('Развернуть');

      dropDown.stop(false, true).slideToggle();

      e.preventDefault();
  });

  // Form accordion
   $('.form-accordion .accordion-btn-js').click(function(e) {
      var dropDown = $(this).closest('.form-accordion').find('.accordion-contant-js');
      $(this).toggleClass('open');

      dropDown.stop(false, true).slideToggle();

      e.preventDefault();
  });

  //offer tabs
  $(".offer .tab").on("click", "a", function (event) {
  event.preventDefault();
  $(".tab a").removeClass('active');    
      $(this).addClass('active');
      var tab = $(this).attr("data-tab");

      $(".offer__wrapper").hide();
      $(".offer__wrapper[data-tab = " + tab + "]").show();
      $(".offer-slider").slick("setPosition");
  });


  $('.article-slider-main').slick({
    // slidesToShow: 4,
    slidesToScroll: 1,
    // centerMode: true,
    // autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    arrows: false,
    variableWidth: true,

    centerPadding: '0',
    speed: 500,
  });


  $('.custom-select').selectize();

  //Popup
  $('.popup').magnificPopup({
  });
  $('.popup-img').magnificPopup({
    type: 'image'
  });
  $('.popup_close').on( "click", function() {
    $.magnificPopup.close();
  });

  $('.popup').magnificPopup({

  });
  $('.popup-thank').magnificPopup({
    callbacks: {
      close: function() {
          window.location.href = "thank.html"
      }
    }  
  });


  //Scrollbar
  $('.scrollbar').scrollbar(); 


  function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
  }

  

  //Forms
  $(".input-mask").mask('+7 (999) 99-99-999');
  $(".mask-phone").mask('+7 (999) 99-99-999');
  $(".mask-code").mask('00-00');
  $(".mask-date").mask('99.99.9999');
  $(".mask-pass-number").mask('9999 999999');
  $(".mask-department-code").mask('999-999')
  $(".mask-index").mask('999999')


  $( ".input-datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
  });

  let fields = document.querySelectorAll('.validate input');

  for(let i = 0; i < fields.length; i++){
    if(fields[i].value !== ''){
      fields[i].classList.add('used')
    }
  }

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });


  let hash = window.location.hash
  if (hash == '#step-1') {
    $('#content-wrapper').hide();
    $('#forms-wrapper').show();
  } else if (hash == '#step-2'){
    $('#steps-form_1').hide();
    $('#steps-form_2').show();
    $('#rating-progress, #progress').addClass('progress_50');

    $('.progress__text').html('Шаг 2/3');
   
  } else if (hash == '#step-3'){
    $('#steps-form_1, #steps-form_2').hide();
    $('#steps-form_3').show();
    $('#rating-progress, #progress').addClass('progress_75');

    $('.progress__text').html('Шаг 3/3');
  } else if (hash == '#thank'){
    $('#content-wrapper, #forms-wrapper').hide();
    $('#best-offers').show();
  }

  $('input').focus( function(){
    $(this).closest(".form-input").removeClass('error');
  });

  $('#client-phone').blur( function(){
    if($(this).val().length >= 18)
    {
       $(this).closest(".form-input").addClass('done');
    } else {
       $(this).closest(".form-input").removeClass('done').addClass('error');
    }
  });
  $( "#action-btn").on('click', function(e){
    e.preventDefault();
    if (($("#check").is(":checked"))) {
      if ($('#client-phone').val().length >= 18) {
        window.location.hash = 'step-1';
        $('#content-wrapper').hide();
        $('#forms-wrapper').show();

        localStorage.setItem('client-phone', $('#client-phone').val());
      }else{
        $('#client-phone').closest(".form-input").addClass('error');
      }
    }
  });

  $('#forms-wrapper input').blur( function(){

     var validateName = $(this).data('validate');
     var val = $(this).val();

     switch(validateName){

       case 'text':
          $(this).closest(".form-input").removeClass('validate');

          if(val.length > 2)
          {
             $(this).closest(".form-input").addClass('done');
          } else {
             $(this).closest(".form-input").removeClass('done').addClass('error');
          }
      break;
        case 'email':
          $(this).closest(".form-input").removeClass('validate');

           var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
           if(val != '' && rv_email.test(val))
           {
              $(this).closest(".form-input").addClass('done');
           }
           else
           {
              $(this).closest(".form-input").removeClass('done').addClass('error');
           }
       break;
     }
  });

  $("#check-registration").click(function(){
    if($(this).is(":checked")){
      $('#additional-forms').slideUp();
    } else {
      $('#additional-forms').slideDown();
    }
  });



  

  

  $('#steps-form_1').on('click', '.btn', function(e){
    e.preventDefault();
    if ($('#steps-form_1 .error').length || $('#steps-form_1 .validate').length) {
      $('#steps-form_1 .validate').addClass('error');
    } else {
      window.location.hash = 'step-2';

      localStorage.setItem('basic-data', JSON.stringify($('#steps-form_1').serializeArray()));
      
      let dataOrder = localStorage.getItem('basic-data');


      $.ajax({
            url: ajax_obj.ajaxurl,
            data: 'action=submitOrder&' + 'data=' + dataOrder,
            type: 'post',
            success: function(data){
               console.log(data);
            }

       })


      $('#steps-form_1').hide();
      $('#steps-form_2').show();
      $('html, body').animate({scrollTop: $('#steps-form_2').offset().top - 100 }, 0);
      $('#progress').addClass('progress_50');

      $('.progress__text').html('Шаг 2/3');
      $('.microloan-forms .progress__text').html('Получите <b>50% к вероятности одобрения,</b> заполнив 2й шаг');
    }
  });

  $('#steps-form_2').on('click', '.btn', function(e){
    e.preventDefault();
    if ($('#steps-form_2 .error').length || $('#steps-form_2 .validate').length) {
      $('#steps-form_2 .validate').addClass('error');
    } else {
      window.location.hash = 'step-3';

      localStorage.setItem('passport-data', JSON.stringify($('#steps-form_2').serializeArray()));

      $('#steps-form_2').hide();
      $('#steps-form_3').show();
      $('html, body').animate({scrollTop: $('#steps-form_3').offset().top - 100 }, 0);
      $('#progress').addClass('progress_75');

      $('.progress__text').html('Шаг 3/3');
      $('.microloan-forms .progress__text').html('Получите <b>75% к вероятности одобрения,</b> заполнив 3й шаг');
    }
  });

  $('#steps-form_3').on('submit', function(e){
    e.preventDefault();
    if ($('#steps-form_3 .error').length || $('#steps-form_3 .validate').length) {
      $('#steps-form_3 .validate').addClass('error');
    } else {
      window.location.hash = 'thank';


      localStorage.setItem('address-data', JSON.stringify($('#steps-form_3').serializeArray())); 
      
 
      let mainArray = [...[{'name':'client-phone', 'value':localStorage.getItem('client-phone')}], ...JSON.parse(localStorage.getItem('basic-data')), ...JSON.parse(localStorage.getItem('passport-data')), ...JSON.parse(localStorage.getItem('address-data'))];

      let mainObj = {};
      mainArray.forEach((item)=>{
        mainObj[item.name] = item.value;
      });
    
      let mainObj2 = {
        'name':  'name',
        'lastName': 'LastName'
        };
      $.ajax({
            url: ajax_obj.ajaxurl,
            // data: 'action=submitOrder&mainObj=' + JSON.stringify(mainObj2),
            //data: 'action=submitOrder&mainObj=' + JSON.stringify(mainObj2),
            type: 'post', 
            success: function(data){
               console.log(data);
            }

       })

      // var data = {
      //   'action': 'submitOrder',
      //   'post_type': 'json',
      //   'mainObj': mainObj
      // };

      // jQuery.post("", data, function(response) {
      //   console.log( response );
      // }, 'json');

      $('#forms-wrapper').hide();
      $('#best-offers').show();
      $('html, body').animate({scrollTop: $('#best-offers').offset().top}, 0);
    }
  });


  // Желаемый кредитный лимит *
  $( "#card-credit-limit-range" ).slider({
    range: "min",
    value: 56000,
    min: 1000,
    max: 500000,
    step: 1000,
    slide: function( event, ui ) {
      $( "#card-credit-limit" ).val( numberWithSpaces(ui.value) + " ₽" );
    }
  });
  $( "#card-credit-limit").val( $( "#card-credit-limit-range" ).slider( "value" )  +  " ₽");
  
  // Сколько тратите в месяц?
  $( "#spend-term-range" ).slider({
    range: "min",
    value: 6000,
    min: 5000,
    max: 100000,
    step: 500,
    slide: function( event, ui ) {
      $( "#spend-term" ).val( numberWithSpaces(ui.value)  + " ₽" );
    }
  });
  $( "#spend-term" ).val( $( "#spend-term-range" ).slider( "value" )  +  " ₽");

  // Желаемый кредитный лимит *
  $( "#credit-limit-range" ).slider({
    range: "min",
    value: 6000,
    min: 1000,
    max: 500000,
    step: 1000,
    slide: function( event, ui ) {
      $( "#credit-limit" ).val( numberWithSpaces(ui.value) + " ₽" );
    }
  });
  $( "#credit-limit").val( numberWithSpaces($( "#credit-limit-range" ).slider( "value" ))  +  " ₽");

  // Желаемый срок кредита *
  $( "#credit-term-range" ).slider({
    range: "min",
    value: 20,
    min: 7,
    max: 60,
    slide: function( event, ui ) {
      $( "#credit-term" ).val( ui.value  + " дней" );
    }
  });
  $( "#credit-term" ).val( $( "#credit-term-range" ).slider( "value" )  +  " дней");
 
    


  //Coockie
  function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }


  //Search City
  $('#inputCity').bind("input", function() {
      if(this.value.length >= 2){

          var xhr;
          if(xhr && xhr.readyState != 4){
            xhr.abort();
          }
          xhr = $.ajax({
              url: ajax_obj.ajaxurl,
              data: 'action=searchCity'+ '&cities=' + this.value,
              type: 'post',
              success: function(data){
                 $("#city-list").html(data);
             }
         })
      }
  })

  var city = getCookie('user-city');  
  var region = getCookie('user-region');
  
  if (city) {
    $(".header-cities .header-cities__link").text(city);
    $("#adress-city").val(city).addClass('used');
    $("#adress-region").val(region).addClass('used');
  }

  $("#city-list").on("click", ".selectCity__item", function(){
      city = $(this).data("city");
      region = $(this).data("region");
      $(".selectCity__item").removeClass('selectCity__current');
      $(this).addClass('selectCity__current');
      $(".header-cities .header-cities__link").text(city);

      document.cookie = "user-city=" + city + "; path=/";
      document.cookie = "user-region=" + region + "; path=/";
      $('#inputCity').val(city);

      $.magnificPopup.close();
  })

  
  var regionForm = '';

  //Search City Form
  $('#adress-region').bind("input", function() {
      if(this.value.length >= 2){
          var xhr;
          if(xhr && xhr.readyState != 4){
            xhr.abort();
          }
          xhr = $.ajax({
              url: ajax_obj.ajaxurl,
              data: 'action=searchRegions'+ '&regions=' + this.value,
              type: 'post',
              success: function(data){
                 $("#adress-region-list").html(data);

             }
         })
      }
  })

  $("#adress-region-list").on("click", ".ajax-search__item", function(){  
    $('#adress-region').val($(this).text());
    $("#adress-region-list").html('').removeAttr("style");
    regionForm = $(this).text();
  })

  //Search City Form
  $('#adress-city').bind("input", function() {
      if(this.value.length >= 2){

          var xhr;
          if(xhr && xhr.readyState != 4){
            xhr.abort();
          }
          xhr = $.ajax({
              url: ajax_obj.ajaxurl,
              data: 'action=searchCityForm'+ '&region=' + regionForm + '&cities=' + this.value,
              type: 'post',
              success: function(data){
                 $("#adress-cities-list").html(data);
             }
         })
      }
  })
  $("#adress-cities-list").on("click", ".selectCity__item", function(){  
    $('#adress-city').val($(this).data("city"));
    $('#adress-region').val($(this).data("region"));
    $("#adress-cities-list").html('').removeAttr("style");
  })

});


