(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top');
        } else {
            $('.navbar').removeClass('sticky-top');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    var cardSlider = new Swiper('.shop-slider', {
        autoplay: 
        {
		delay: 4000,
		disableOnInteraction: false
	},
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        slidesPerView: 3,
        spaceBetween: 50,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 5
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 5
            },
            // when window is <= 991px
            991: {
                slidesPerView: 2,
                spaceBetween: 5
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 50,
              },

        }
    });

    var cardSlider = new Swiper('.gallery-slider', {
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        slidesPerView: 3,
        spaceBetween: 110,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 33
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            // when window is <= 991px
            991: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
              },
        }
    });


    // // Screenshot carousel
    // $(".screenshot-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1000,
    //     loop: true,
    //     dots: true,
    //     items: 1
    // });


    // // Testimonials carousel
    // $(".testimonial-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1000,
    //     loop: true,
    //     center: true,
    //     dots: false,
    //     nav: true,
    //     navText : [
    //         '<i class="bi bi-chevron-left"></i>',
    //         '<i class="bi bi-chevron-right"></i>'
    //     ],
    //     responsive: {
    //         0:{
    //             items:1
    //         },
    //         768:{
    //             items:2
    //         },
    //         992:{
    //             items:3
    //         }
    //     }
    // });
    
})(jQuery);

AOS.init();
