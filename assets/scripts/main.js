/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);




  //header anim


  //var shrinkHeader = 50;
  //$(window).scroll(function() {
  //  var scroll = getCurrentScroll();
  //  if ( scroll >= shrinkHeader ) {
  //    $('header').addClass('header-anim');
  //  }
  //  else {
  //    $('header').removeClass('header-anim');
  //  }
  //});
  //function getCurrentScroll() {
  //  return window.pageYOffset || document.documentElement.scrollTop;
  //}


  // navigation

  $(".btn-menu-anim").click(function(){
    $("body").toggleClass("menu-open");
  });

  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true);
  });


  // home scroll

  $(".scroll-down-content").on("click", function(event) {
    event.preventDefault(); //Prevent default action of anchor
    $("html, body").animate({
      scrollTop: $(".page-header-content").height()  //Get the document height
    }, "slow"); //Animates the scroll
    /* Can also use 3000, 4000 i.e 3 seconds, 4 seconds to animate the scroll */
  });

  //documentation active button
  $(".page-template-documentation .sidebar-link").on('click', function(e){
    $("form .active").removeClass('active');
    $(this).addClass('active');
  });


  // header anim


  var didScroll;
  window.lastScrollTop = 0;
  var navbarHeight = $('header').outerHeight();

  $(window).scroll(function(event){
    didScroll = true;
    hasScrolled();
  }).trigger("scroll");

  //setInterval(function() {
  //  if (didScroll) {
  //    hasScrolled();
  //    didScroll = false;
  //  }
  //}, 250);

  function hasScrolled() {
    var st = $(this).scrollTop();

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > window.lastScrollTop && st){
      // Scroll Down
      $('header').removeClass('nav-down').addClass('nav-up');
      $('.last-articles-blog').addClass('up');
    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        $('header').removeClass('nav-up').addClass('nav-down');
        $('.last-articles-blog').removeClass('up');
      }
    }

    if (st == 0){
      $('header').removeClass('nav-down');
      $('.last-articles-blog').removeClass('up');
    }

    window.lastScrollTop = st;
  }

  $('.job-content p').each(function() {
    if ( $.trim( $(this).text() ).length == 0 ) {
      if ( $(this).children().length == 0 ) {
        $(this).text('');
        $(this).remove();
      }
    }
  });

  $('.data-href').unbind('click').click(function() {
    window.location.href = $(this).attr('data-href');
  });

  $('.home .page-header-content a, .page-template-career #job-offers').click(function(event){
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $(window).height()
    }, "slow");
  });

  //enterprise page

  $('.page-header-links li > a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top-60
        }, 500);
        return false;
      }
    }
  });

  $(".page-header-links").sticky({topSpacing:0});

  $('body.page-template-enterprise').scrollspy({
    target: '.page-header-links',
    offset: 120
  });

  $("#job-offers").sticky({topSpacing:70});

  $('header li.dropdown').on('click', function(){
    $("li.dropdown.open").removeClass('open');
    $(this).addClass('open');
  });


})(jQuery); // Fully reference jQuery after this point.
