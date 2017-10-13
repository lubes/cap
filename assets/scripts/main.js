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

function parallax() {
    (function() {

      var start = null;
      var scrollPosition = window.scrollY;
      var halfWindowHeight = window.innerHeight / 2;
      var rAFstarted = false;

      var scrollnimates = [].slice.call(document.getElementsByClassName('p_el'));
      // get their offset from top of screen and their scroll speed
      scrollnimates.forEach( function ( sn ) {
          var clientOffsets = sn.getBoundingClientRect();
          sn.animationOffset = clientOffsets.top + scrollPosition;
          sn.magicNumber = sn.dataset.magicNumber || sn.getAttribute("data-scroll") || "-14";
      });
        function step(timestamp) {
          if (!start) start = timestamp;
          // full progress indicator
          var progress = timestamp - start;
          var scrollPoint = window.scrollY;
          scrollnimates.forEach( function ( sn ) {
            //sn.animationOffsets == main.he
            if ( scrollPoint > ( sn.animationOffset - halfWindowHeight * 2 ) && scrollPoint < ( sn.animationOffset + halfWindowHeight ) ) {
              var magicPoint = ( scrollPoint - ( sn.animationOffset - halfWindowHeight ) ) / sn.magicNumber;
              var up = magicPoint  + 'px';
              sn.style.webkitTransform = 'translateY('+up+')';
              sn.style.MozTransform = 'translateY('+up+')';
              sn.style.msTransform = 'translateY('+up+')';
              sn.style.OTransform = 'translateY('+up+')';
              sn.style.transform = 'translateY('+up+')';
            }
          });
          window.requestAnimationFrame(step);
        }
        window.requestAnimationFrame(step);
    })();
}

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        $(document).on("scroll", function() {
            if($(document).scrollTop()>100) {
                $(".banner").addClass("smaller");
            } else {
                $(".banner").removeClass("smaller");
            }
        });  
          
        // INVIEW Functions
        function inView( opt ) {
            if( opt.selector === undefined ) {
                console.log( 'Valid selector required for inView' );
                return false;
            }
            var elems = [].slice.call( document.querySelectorAll( opt.selector ) ),
                once = opt.once === undefined ? true : opt.once,
                offsetTop = opt.offsetTop === undefined ? 0 : opt.offsetTop,
                offsetBot = opt.offsetBot === undefined ? 0 : opt.offsetBot,
                count = elems.length,
                winHeight = 0,
                ticking = false;
            function update() {
                var i = count;
                while( i-- ) {
                    var elem = elems[ i ],
                        rect = elem.getBoundingClientRect();
                    if( rect.bottom >= offsetTop && rect.top <= winHeight - offsetBot ) {
                        elem.classList.add( 'in-view' );


                        if( once ) {
                            count--;
                            elems.splice( i, 1 );
                        }
                    } else {
                        elem.classList.remove( 'in-view' );
                    }
                }
                ticking = false;
            }
            function onResize() {
                winHeight = window.innerHeight;
                requestTick();
            }
            function onScroll() {
                requestTick();
            }
            function requestTick() {
                if( !ticking ) {
                    requestAnimationFrame( update );
                    ticking = true;
                }
            }
            window.addEventListener( 'resize', onResize, false );
            document.addEventListener( 'scroll', onScroll, false );
            document.addEventListener( 'touchmove', onScroll, false );
            onResize();
        }
        // InView
        inView({
            selector: '.inview-item', // an .in-view class will get toggled on these elements
            once: true, // set this to false to have the .in-view class be toggled on AND off
            offsetTop: 0, // top threshold to be considered "in view"
            offsetBot: 200 // bottom threshold to be considered "in view"
        }); 


      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
          
            setTimeout(function(){
                $('.intro-entry').addClass('ready');
            }, 500);
            
            // Affix menu at different position on homepage
            $(document).on("scroll", function() {
                if($(document).scrollTop()>900) {
                    $(".banner").addClass("smaller");
                } else {
                    $(".banner").removeClass("smaller");
                }
            });  
          
            parallax();
          
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
        
      }
    },
    // About us page, note the change from about-us to about_us.
    'about': {
      init: function() {
        // JavaScript to be fired on the about us page
          
        parallax();  
          
      }
    },
    // Solutions
    'solutions': {
      init: function() {
        // JavaScript to be fired on the solutions page
          
        parallax();  
          
        $('.anchor-link').click(function(){
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 1200);
            return false;
        });           
          
        $('.timeline-slider').slick({
            dots: false,
            arrows: true,
            infinite: false,
            slidesToShow: 1, 
            slidesToScroll: 1,
            speed: 600,
            autoplay: true,
            autoplaySpeed: 5000000,
            pauseOnHover: false,
            appendArrows: $('.navs-wrap'),
            prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-left'></i></div>",
            nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-right'></i></div>"
        });   
          
        var slides = $('.timeline-slider .slide').length;
        $('#total').html(slides); 

        $('.timeline-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){ 
            var current_slide = $('.slick-current').find('.slide').data('slide');
            $('#current').html(current_slide); 
        });
          
      }
    },
    // Blog
    'blog': {
      init: function() {
          
        var filter_link = $('.filter-link');
        filter_link.click(function() {
            var this_filter = $(this).data('filter');
            var prefix = 'category-';
            var filter_tag = prefix + this_filter;
            $('.post-block').fadeOut('fast');
            filter_link.removeClass('active');
            $(this).addClass('active');
            setTimeout(function(){
                $('.'+filter_tag).fadeIn('fast');
            }, 500);
        });
  
      }
    },
    // Team Page
    'post_type_archive_team': {
      init: function() {
          
        $('.menu-item-27').addClass('current_page_item');
          
        var filter_link = $('.filter-link');
        filter_link.click(function() {
            var this_filter = $(this).data('filter');
            var prefix = 'team_category-';
            var filter_tag = prefix + this_filter;
            $('article').fadeOut('fast');
            filter_link.removeClass('active');
            $(this).addClass('active');
            setTimeout(function(){
                $('.'+filter_tag).fadeIn('fast');
            }, 500);
        });
  
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

})(jQuery); // Fully reference jQuery after this point.
