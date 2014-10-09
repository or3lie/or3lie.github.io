/********************************************************
 *
 * Custom Javascript code for Curri Bootstrap theme
 * Written by Themelize.me (http://themelize.me)
 *
 *******************************************************/
 /*global jRespond */
 $(document).ready(function() {
  "use strict";
  
  // Custom code
  // --------------------------------
  
  //IE placeholders
  $('[placeholder]').focus(function() {
    var input = $(this);
    if (input.val() === input.attr('placeholder')) {
      if (this.originalType) {
        this.type = this.originalType;
        delete this.originalType;
      }
      input.val('');
      input.removeClass('placeholder');
    }
  }).blur(function() {
    var input = $(this);
    if (input.val() === '') {
      input.addClass('placeholder');
      input.val(input.attr('placeholder'));
    }
  }).blur();
  
  //fix main nav on scroll
  var navBarYOffset = $("#navigation").offset().top;
  $(window).scroll(function() {
    if ($(window).scrollTop() > 50) {
      $('body').addClass('navbar-fixated');
    } else {
      $('body').removeClass('navbar-fixated');
    }
  });
  
  //Scroll Top link
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('[data-js=scroll-show]').addClass('scroll-show');
    } else {
      $('[data-js=scroll-show]').removeClass('scroll-show');
    }
  });
  
  //background & colour switch
  $('a.colour').click(function() {
    var c = $(this).data('colour');
    $('html').toggleClass(c);
    $(this).toggleClass('on');
  });
  
  // Plugins
  // --------------------------------
  //scrollTo
  if(jQuery().onePageNav) {
    $('body').onePageNav({
      filter: 'a[href^="#"]',
      scrollOffset: 100
    });
  }
  

  //Respond settings
  enquire.register("screen and (max-width:991px)", {

    // OPTIONAL
    // If supplied, triggered when a media query matches.
    match : function() {
      $('html').addClass('breakpoint-mobile');
      $('.mobile-toggle').hide();
    },      

    // OPTIONAL
    // If supplied, triggered when the media query transitions 
    // *from a matched state to an unmatched state*.
    unmatch : function() {
      $('html').removeClass('breakpoint-mobile');
      $('.mobile-toggle').show();
    }

  });



  //setup Menu
  $('.mobile-toggle-trigger').on('click',function(){
    $('.breakpoint-mobile .mobile-toggle').slideToggle();
  });

  $('.breakpoint-mobile .nav li a').on('click',function(){
    console.log('test');
    $('.breakpoint-mobile .mobile-toggle').slideToggle();
  });



  //flexslider carousels
  $('.flexslider-carousel').each(function() {
    var carouselSettings =  {
      animation: $(this).data('transition') || "slide",
      animationLoop: false,
      selector: ".items > .item",
      itemWidth: $(this).data('item-width'),
      itemMargin: $(this).data('item-margin'),
      move: 1,
      controlNav: typeof $(this).data('item-controls-on') !== 'undefined' ? true : false,
      slideshow: false,
      minItems: $(this).data('min-items') || 1,
      maxItems: $(this).data('max-items') || 5
    };
    
    var navFor = $(this).data('navfor');
    if (navFor !== '') {
      carouselSettings = $.extend({}, carouselSettings, {
        asNavFor: '#'+ navFor
      });
    }
    
    $(this).flexslider(carouselSettings);
  });
  
  //flexslider
  $('.flexslider').each(function(i) {
    //passable settings
    var sliderNav = $(this).data('slidernav') || 'auto';
    var autoStartOff = $(this).data('autostartoff') || false;
    var animation = $(this).data('transition') || 'fade';
    $(this).addClass('flexslider-animation-'+ animation);

    var sliderSettings =  {
      id: 'flexslider-'+ i,
      animation: animation,
      selector: ".slides > .slide",
      controlNav: $(this).data('controlnav'),
      directionNav: $(this).data('directionnav'),
      smoothHeight: $(this).data('smoothheight'),
      minItems: $(this).data('min-items') || 1,
      maxItems: $(this).data('max-items') || 1,
      multipleKeyboard: true,
      start: function(slider){
        slider.addClass('slider-safe-hide'); //slider loaded to safe to hide
        
        //load first image
        slider.slides.eq(0).find("img[data-js=unveil]").each(function () {
          $(this).unveil();
        });

        if (autoStartOff === true) {
          slider.flexslider("stop");
        }
      },
      before: function(slider){
        // lazy load
        slider.slides.eq(slider.animatingTo).find("img[data-js=unveil]").each(function () {
          $(this).unveil();
        });
      }
    };

    if (sliderNav !== 'auto') {
      sliderSettings = $.extend({}, sliderSettings, {
        manualControls: sliderNav +' li a',
        controlsContainer: '.flexslider-wrapper'
      });
    }

    $(this).flexslider(sliderSettings);
  });

  //projects display
  var fullView = $('#full-view');
  if (fullView.size() > 0) {
    var fullViewParent = fullView.parent();
    fullView.prepend('<a class="close">Close</a>');

    //pager navigation show/hide flexslider
    var workItems = $('#work .item a');
    workItems.removeClass('flex-active');
    workItems.on('click touchstart', function(e) {
      var index = workItems.index($(this));
      
      fullView.slideDown('slow', function() {
        //advance to clicked slide, 2.0 API
        fullView.flexslider(index);
      });
      
      $(this).addClass('flex-active'); // if same slide is clicked that was last open

      $('html, body').animate({
         scrollTop: fullViewParent.offset().top - ($('.navbar .container').height() + 5) //navbar height
       }, 500);
      
      //refresh slider incase full-view is hidden
      fullView.trigger("resize");
      e.preventDefault();
    });
    
    //close link
    fullView.find('.close').on('click touchstart', function() {
      fullView.slideUp('slow');
      $('html, body').animate({
         scrollTop: $('#work').offset().top - ($('.navbar .container').height() + 5) //navbar height
       }, 500);
      $('#work .item a').removeClass('flex-active');
    });
  }
  
  //unveil plugin
  $("img[data-js=unveil-auto]").addClass('unveil-loading');
  $("img[data-js=unveil-auto]").unveil(0, function() {
    $(this).load(function() {
      $(this).removeClass('unveil-loading').addClass('unveil-loaded');
    });
  });


  var error = false;
  /* check form fields on load */
  if($('.required input[type=text], .required textarea').val() != "Nom" && $('.required input[type=text], .required textarea').val() != "Email" && $('.required input[type=text], .required textarea').val() != "Message") {
    error = false;
    $('.required input[type=text], .required textarea').siblings('.fa').removeClass('fa-asterisk').addClass('fa-check');
  }
  else {
    error = true;
  }
  if(isValidEmailAddress($('.required input[type=email]').val())) {
    error = false;
    $('.required input[type=email]').siblings('.fa').removeClass('fa-asterisk fa-times').addClass('fa-check');
  }
  else {
    error = true;
    if($('.required input[type=email]').val() == "Email") {
      $('.required input[type=email]').siblings('.fa').removeClass('fa-times fa-check').addClass('fa-asterisk');
    }
    else {
      $('.required input[type=email]').siblings('.fa').removeClass('fa-asterisk fa-check').addClass('fa-times');
    }
  }

  /* check text and texarea fields on blur */
  $('.required input[type=text], .required textarea').blur(function(){
    var field = $(this);
    if(field.val() != "Nom" && field.val() != "Email" && field.val() != "Message") {
      error = false;
      field.siblings('.fa').removeClass('fa-asterisk').addClass('fa-check');
    }
    else {
      error = true;
      field.siblings('.fa').removeClass('fa-check').addClass('fa-asterisk');
    }
  });

  /* check mail field on blur */
  $('.required input[type=email]').blur(function(){
    var field = $(this);
    if(isValidEmailAddress(field.val())) {
      error = false;
      field.siblings('.fa').removeClass('fa-asterisk fa-times').addClass('fa-check');
    }
    else {
      error = true;
      if(field.val() == "Email") {
        field.siblings('.fa').removeClass('fa-times fa-check').addClass('fa-asterisk');
      }
      else {
        field.siblings('.fa').removeClass('fa-asterisk fa-check').addClass('fa-times');
      }
    }
  });


  $('.btn-send').on('click',function(e){
    if(error) {
      $('.btn-send').addClass('not-ok');
      setTimeout(function(){$('.btn-send').removeClass('not-ok');},1000);
      e.preventDefault();
    }
  });

(function(d, Mailto){
  var form = document.querySelector('.mailto-form');
  var previewLink = document.querySelector('.btn-send');
  var emailSubject='Contact depuis le portfolio d\'Aurélie Rigouste';

  var m = new Mailto(form);
  var updatePreview = function updatePreview(event){
    var body = m.getBody();
    var data = m.getData();

    previewLink.href=m.getMailtoUrl('',{subject:emailSubject,body:body});
  };

  form.addEventListener('change', updatePreview);
  form.addEventListener('submit', updatePreview);
  return true;
})(document, mailto);

});




function isValidEmailAddress(emailAddress) {
  var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
  return pattern.test(emailAddress);
};
