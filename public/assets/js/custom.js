
  (function ($) {
  
  "use strict";

  // NAVBAR
  $('.navbar-nav .nav-link').click(function(){
      $(".navbar-collapse").collapse('hide');
  });


  // PROJECTS IMAGE RESIZE
    function NewsImageResize(){      
      var LargeImage = $('.projects-thumb-small .projects-image').height();

      $('.projects-thumb-large').css('height', LargeImage + 'px');
    }

    $(window).on("resize", NewsImageResize);
    $(document).on("ready", NewsImageResize);

    $('.custom-link').click(function(){
    var el = $(this).attr('href');
    var elWrapped = $(el);
    var header_height = $('.navbar').height() + 10;

    scrollToDiv(elWrapped,header_height);
    return false;

    function scrollToDiv(element,navheight){
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop-navheight;

      $('body,html').animate({
      scrollTop: totalScroll
      }, 300);
  }
  });

  //Home Summernote
  $(document).ready(function() {
    $("#banner_text_en_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#banner_text_my_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#banner_text_ja_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });

  //About Us Summernote
 
  $(document).ready(function() {
      $("#img_desp_en_summernote").summernote();
      $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#desp_en_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#img_desp_my_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#desp_my_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#img_desp_ja_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#desp_ja_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });

  //Contact Us Summernote
  $(document).ready(function() {
    $("#address_en_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#address_my_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  $(document).ready(function() {
    $("#address_ja_summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });

  })(window.jQuery);


