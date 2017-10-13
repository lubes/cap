(function($) {

function global_functions() {
    
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
}    
global_functions();
// End Global Functions
    
// Parallax Functino
function parallax() {
    var start = null;
    var scrollPosition = window.scrollY;
    var halfWindowHeight = window.innerHeight / 2;
    var rAFstarted = false;
    var scrollnimates = [].slice.call(document.getElementsByClassName('p_el'));
    scrollnimates.forEach(function (sn) {
        var clientOffsets = sn.getBoundingClientRect();
        sn.animationOffset = clientOffsets.top + scrollPosition;
        sn.magicNumber = sn.dataset.magicNumber || sn.getAttribute("data-scroll") || "-14";
    });
    function step(timestamp) {
        if (!start) start = timestamp;
        var progress = timestamp - start;
        var scrollPoint = window.scrollY;
        scrollnimates.forEach(function (sn) {
            if (scrollPoint > (sn.animationOffset - halfWindowHeight * 2) && scrollPoint < (sn.animationOffset + halfWindowHeight)) {
                var magicPoint = (scrollPoint - (sn.animationOffset - halfWindowHeight)) / sn.magicNumber;
                var up = magicPoint + 'px';
                sn.style.webkitTransform = 'translateY(' + up + ')';
                sn.style.MozTransform = 'translateY(' + up + ')';
                sn.style.msTransform = 'translateY(' + up + ')';
                sn.style.OTransform = 'translateY(' + up + ')';
                sn.style.transform = 'translateY(' + up + ')';
            }
        });
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}
          
var Homepage = Barba.BaseView.extend({
    namespace: 'home',
    onEnter: function() {
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
    },
    onEnterCompleted: function() {
        parallax();
    }
});
var TeamPage = Barba.BaseView.extend({
    namespace: 'team',
    onEnter: function() {

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
});
    
var AboutPage = Barba.BaseView.extend({
    namespace: 'about',
    onEnter: function() {

    },
    onEnterCompleted: function() {
        parallax();
    }
});     
    
var SolutionsPage = Barba.BaseView.extend({
    namespace: 'solutions',
    onEnter: function() {
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
    },
    onEnterCompleted: function() {
        parallax();
    },
});

var BlogPage = Barba.BaseView.extend({
    namespace: 'blog',
    onEnter: function() {
 
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
    },
    onEnterCompleted: function() {
        
    },
    onLeave: function() {
    
    },
    onLeaveCompleted: function() {
    
    }
}); 
    
var BasicPage = Barba.BaseView.extend({
    namespace: 'basic',
    onEnterCompleted: function() {

    }
}); 
    
var SearchResults = Barba.BaseView.extend({
    namespace: 'search_results',
    onEnterCompleted: function() {
        $('.menu-item-20').addClass('current_page_item');
    }
}); 
    
Homepage.init();  
TeamPage.init();
SolutionsPage.init();
BlogPage.init();
AboutPage.init();
BasicPage.init();
SearchResults.init();
              
var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    /**
     * This function is automatically called as soon the Transition starts
     * this.newContainerLoading is a Promise for the loading of the new container
     * (Barba.js also comes with an handy Promise polyfill!)
     */

    // As soon the loading is finished and the old page is faded out, let's fade the new page
    Promise
      .all([this.newContainerLoading, this.fadeOut()])
      .then(this.fadeIn.bind(this));
  },

  fadeOut: function() {
    /**
     * this.oldContainer is the HTMLElement of the old Container
     */

        return $(this.oldContainer).animate({ opacity: 0 }).promise();
    
  },

  fadeIn: function() {
    /**
     * this.newContainer is the HTMLElement of the new Container
     * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
     * Please note, newContainer is available just after newContainerLoading is resolved!
     */
      
        global_functions();   

        var _this = this;
        var $el = $(this.newContainer);

        $(this.oldContainer).hide();
        document.body.scrollTop = document.documentElement.scrollTop = 0;
   
    
    $el.animate({ opacity: 1 }, 400, function() {
      /**
       * Do not forget to call .done() as soon your transition is finished!
       * .done() will automatically remove from the DOM the old Container
       */

      _this.done();
    });
  }
});

/**
 * Next step, you have to tell Barba to use the new Transition
 */

Barba.Pjax.getTransition = function() {
  /**
   * Here you can use your own logic!
   * For example you can use different Transition based on the current page or link...
   */

  return FadeTransition;
};    
    
Barba.Pjax.start();    

    

})(jQuery);
