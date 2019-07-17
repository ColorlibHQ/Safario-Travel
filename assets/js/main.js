(function ($) {
  "use strict";

  var window_width = $(window).width(),
    window_height = window.innerHeight,
    header_height = $(".default-header").height(),
    header_height_static = $(".site-header.static").outerHeight(),
    fitscreen = window_height - header_height;

  $(".fullscreen").css("height", window_height)
  $(".fitscreen").css("height", fitscreen);


  var nav_offset_top = $('header').height() + 50;
  /*-------------------------------------------------------------------------------
  Navbar 
-------------------------------------------------------------------------------*/

  //* Navbar Fixed  
  function navbarFixed() {
    if ($('.header_area').length) {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= nav_offset_top) {
          $(".header_area").addClass("navbar_fixed");
        } else {
          $(".header_area").removeClass("navbar_fixed");
        }
      });
    };
  };
  navbarFixed();

  //------- Parallax -------//
  skrollr.init({
    forceHeight: false
  });



  //------- mailchimp --------//  
  function mailChimp() {
    $('#mc_embed_signup').find('form').ajaxChimp();
  }
  mailChimp();


  $('select').niceSelect();

  /*-------------------------------------------------------------------------------
  testimonial slider
-------------------------------------------------------------------------------*/
  var testimonial = $('.testimonial');
  if (testimonial.length) {
    testimonial.owlCarousel({
      loop: true,
      margin: 30,
      items: 5,
      nav: false,
      dots: true,
      responsiveClass: true,
      slideSpeed: 300,
      paginationSpeed: 500,
      responsive: {
        0: {
          items: 1
        }
      }
    })
  }

  /*
  * Datepicker Function
  */
  var dateFrom = $("#datepicker_from");
  var dateTo   = $("#datepicker_to");
  dateFrom.datepicker();
  dateTo.datepicker();

  dateFrom.attr("autocomplete", "off");
  dateTo.attr("autocomplete", "off");


})(jQuery);