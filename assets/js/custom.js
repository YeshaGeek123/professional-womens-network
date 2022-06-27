jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

    jQuery('.next-list-item a').prop('title', 'Next');
    jQuery('.prev-list-item a').prop('title', 'Previous');
    jQuery('.page-numbers').prop('title', 'Pages');

    /* FAQ Page accordion */
    jQuery('.accordion .faq-content').hide();
    jQuery('.accordion > div:eq(0) .faq-box').addClass('active-faq');
    jQuery('.accordion > div:eq(0) .faq-content').slideDown();

    jQuery('.accordion .faq-box h3').click(function(j) {
        var dropDown = jQuery(this).closest('div').find('.faq-content');
        jQuery(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp();

        if (jQuery(this).hasClass('active-faq')) {
            jQuery(this).removeClass('active-faq');
        } else {
            jQuery(this).closest('.accordion').find('.faq-box.active-faq').removeClass('active-faq');
            jQuery(this).addClass('active-faq');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });



    jQuery('.gallery-slider').slick({
        slidesToShow: 4,
        swipeToSlide: true,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: true,
        rows: 0,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                }
            }
        ]
    });

    jQuery().fancybox({
        selector: '.gallery-slider a',
        "afterShow": function() {
            jQuery('.gallery-slider').slick('slickPause');
        },
        "afterClose": function() {
            jQuery('.gallery-slider').slick('slickPlay');
        }
    });

    jQuery('.testimonials-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: false,
        rows: 0,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false,
                autoplay: false,
                autoplaySpeed: 2000,
            }
        }]
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery("#menu-item-21 a").first().attr('href', 'javascript:void(0);');


    jQuery("#main-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    //menu toggle
    jQuery('#primary-menu .menu-item a,.header-menu .header-menu-box .contact-info .social-media a, .header-menu .header-menu-box .contact-info a').click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });



    jQuery("#site-navigation button").click(function() {
        jQuery("#masthead").toggleClass("sticky-toggled");
    });



    /*Quote Modal JS */
    jQuery("#quoteModal").on('show.bs.modal', function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });
    jQuery('#quoteModal').on('hidden.bs.modal', function() {
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

});


/* Window Load and Resize JS */
// jQuery(window).on('load resize', function() {
//     var window_size = jQuery(window).width();
//     if (window_size <= 991) {

//         jQuery('body').on('click', '#primary-menu .menu-item-has-children', function() {
//             if ((jQuery(this).hasClass('active-sub-menu'))) {
//                 jQuery(this).removeClass('active-sub-menu');
//                 jQuery(this).find('.sub-menu').css('display', 'none');
//             } else {
//                 jQuery(".menu-item-has-children").removeClass('active-sub-menu');
//                 jQuery(".sub-menu").css('display', 'none');
//                 jQuery(this).addClass('active-sub-menu');
//                 jQuery(this).find('.sub-menu').css('display', 'block');
//             }
//         });


//     } else {
//         jQuery('.say-about-slider').slick('destroy');
//     }
// });