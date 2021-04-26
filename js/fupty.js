//JS

$(document).ready(function () {

    //Lazy-Load
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazyload"
    });

    //Menu
    $(function () {
        $('.hamburger').on('click', function () {
            $('.toggle').toggleClass('open');
            $('.menu').toggleClass('open');
        });
    });

    //Menu-Active
    jQuery(function($) {
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $('ul li a').each(function() {
            if (this.href === path) {
                $(this).addClass('active');
            }
        });
    });

    //Menu-Scroll
    $(window).scroll(function() {
        if($(document).scrollTop() > 50) {
            $('#header').addClass('fixed');
        } else {
            $('#header').removeClass('fixed')
        }
    });

    //Home_Slider
    $('.home_slider').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots:true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    //Home_Services
    $('.home_services').owlCarousel({
        loop:true,
        margin:25,
        nav:true,
        dots:false,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:3
            },
            1400:{
                items:3
            },
            1600:{
                items:3
            }
        }
    });

    //Home_Projects
    $('.home_projects').owlCarousel({
        loop:true,
        margin:25,
        nav:false,
        dots:true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:3
            },
            1400:{
                items:3
            },
            1600:{
                items:3
            }
        }
    });

    //Home_Blog
    $('.home_blog').owlCarousel({
        loop:true,
        margin:25,
        nav:true,
        dots:false,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            700:{
                items:1
            },
            1000:{
                items:2
            },
            1200:{
                items:2
            },
            1400:{
                items:2
            },
            1600:{
                items:2
            }
        }
    });

    //Brands_Logo
    $('.brands_logo').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            700:{
                items:3
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            },
            1400:{
                items:4
            },
            1600:{
                items:4
            }
        }
    });

    //Home-Counter
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    //Services_Bottom
    $('.services_bottom').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:2
            },
            1200:{
                items:3
            },
            1400:{
                items:3
            },
            1600:{
                items:3
            }
        }
    });

    //Projects_Bottom
    $('.projects_bottom').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:2
            },
            1200:{
                items:3
            },
            1400:{
                items:3
            },
            1600:{
                items:3
            }
        }
    });

    //Teams_Bottom
    $('.teams_bottom').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:2
            },
            1200:{
                items:3
            },
            1400:{
                items:3
            },
            1600:{
                items:3
            }
        }
    });

});