
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

  //languges
  $(document).ready(function(){
    $(".lang-flag").click(function(){
      $(".language-dropdown").toggleClass("open");
    });

    $("ul.lang-list li").click(function(){
      $("ul.lang-list li").removeClass("selected");
      $(this).addClass("selected");
      if($(this).hasClass('lang-en')){
        $(".language-dropdown").find(".lang-flag").addClass("lang-en").removeClass("lang-es").removeClass("lang-pt").html("<span>English</span>");
        $("#lang_selected li .nav-link:first-child").addClass("englang").show()
        $("#lang_selected li .nav-link:nth-child(2)").removeClass("myanlang").hide()
        $("#lang_selected li .nav-link:last-child").removeClass("jplang").hide()
        $(".seemore a span:first-child").addClass("seemore-eng").show()
        $(".seemore a span:nth-child(2)").removeClass("seemore-myan").hide()
        $(".seemore a span:last-child").removeClass("seemore-jp").hide()
      }else if($(this).hasClass('lang-pt')){
        $(".language-dropdown").find(".lang-flag").addClass("lang-pt").removeClass("lang-es").removeClass("lang-en").html("<span>Myanmar</span>");
        $("#lang_selected li .nav-link:nth-child(2)").addClass("myanlang").show()
        $("#lang_selected li .nav-link:first-child").removeClass("englang").hide()
        $("#lang_selected li .nav-link:last-child").removeClass("jplang").hide()
        $(".seemore a span:nth-child(2)").addClass("seemore-myan").show()
        $(".seemore a span:first-child").removeClass("seemore-eng").hide()
        $(".seemore a span:last-child").removeClass("seemore-jp").hide()
      }else{
        $(".language-dropdown").find(".lang-flag").addClass("lang-es").removeClass("lang-en").removeClass("lang-pt").html("<span>Japan</span>");
        $("#lang_selected li .nav-link:last-child").addClass("jplang").show()
        $("#lang_selected li .nav-link:first-child").removeClass("englang").hide()
        $("#lang_selected li .nav-link:nth-child(2)").removeClass("myanlang").hide()
        $(".seemore a span:last-child").addClass("seemore-jp").show()
        $(".seemore a span:first-child").removeClass("seemore-eng").hide()
        $(".seemore a span:nth-child(2)").removeClass("seemore-myan").hide()
      }
      $(".language-dropdown").removeClass("open");
    });
  })


  })(window.jQuery);


