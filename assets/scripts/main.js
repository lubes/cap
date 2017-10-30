(function($) {

// DISABLE BARBA IF USER IS LOGGED IN
if ($('body').hasClass('logged-in')) {
  Barba.Pjax.preventCheck = function() {
    return false; 
  };
}
    
function global_functions() {
    
    // Remove Dark from body class, appeneded at the Basic module
    $('body').removeClass('dark');
    
    // JavaScript to be fired on all pages
    $(document).on("scroll", function() {
        if($(document).scrollTop()>100) {
            $(".banner").addClass("smaller");
        } else {
            $(".banner").removeClass("smaller");
        }
    });  

    // Hamburger
    (function () {
        $('.hamburger-menu').on('click', function() {
            $('.bar').toggleClass('animate');
            $('.menu-wrapper').toggleClass('open');
        });
    })();
    
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
            $('.intro').addClass('ready');
        }, 500);
        // Affix menu at different position on homepage
        $(document).on("scroll", function() {
            if($(document).scrollTop()>900) {
                $(".banner").addClass("smaller");
            } else {
                $(".banner").removeClass("smaller");
            }
        });  
        
        // Display Different Images on Page Load
        var description = [
          "./wp-content/themes/caprock/dist/images/Home_Navy_OceanWave.jpg",
          "./wp-content/themes/caprock/dist/images/Home_Navy_MountainFog.jpg"
        ];
        var size = description.length
        var x = Math.floor(size*Math.random())
        var randomImg = description[x];
        $('.intro').css("background-image", "url("+ randomImg +")");
        
    },
    onEnterCompleted: function() {
        parallax();
    },
    onLeave: function() {
        $('.intro-entry').removeClass('ready');
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
            $('article').hide();
            filter_link.removeClass('active');
            $(this).addClass('active');
            setTimeout(function(){
                $('.'+filter_tag).fadeIn('fast');
            }, 100);
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
            infinite: true,
            slidesToShow: 1, 
            slidesToScroll: 1,
            speed: 600,
            autoplay: true,
            autoplaySpeed: 5000000,
            pauseOnHover: false,
            fade: true,
            appendArrows: $('.navs-wrap'),
            prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-left'></i></div>",
            nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-right'></i></div>",
          responsive: [
            {
              breakpoint: 575,
              settings: {
                adaptiveHeight: true
              }
            }

          ]
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
            $('.post-block').hide();
            filter_link.removeClass('active');
            $(this).addClass('active');
            setTimeout(function(){
                $('.'+filter_tag).fadeIn('fast');
            }, 200);
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
        
        if($('.page-header').hasClass('grey')) {
            $('body').addClass('dark');
        } else {
            $('body').removeClass('dark');
        }
        
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

var HideShowTransition = Barba.BaseTransition.extend({
    start: function () {
        Promise
        .all([
            this.newContainerLoading,
            this.startOverlay()
        ])
        .then(this.finish.bind(this));
    },
    startOverlay: function () {

        $('body').addClass('leave');

        return $(this.oldContainer).animate({
            opacity: 1
        }).delay(100).promise();
        
    },
    finish: function () {

        global_functions();

        document.body.scrollTop = document.documentElement.scrollTop = 0;

        this.done();

        $('body').removeClass('leave');

    }
});

Barba.Pjax.getTransition = function() {
    return HideShowTransition;
};
Barba.Pjax.init();
Barba.Prefetch.init();

 
    
})(jQuery);
