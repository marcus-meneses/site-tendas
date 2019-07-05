/*-----------------------------------------------------------------------------------

  Template Name: Tasfiu Corporate HTML Template.
  Template URI: #
  Description: Tasfiu is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design corporate, corporate any other purposes websites.
  Author: HasTech
  Author URI: https://themeforest.net/user/hastech/portfolio
  Version: 1.0

-----------------------------------------------------------------------------------*/

/*-------------------------------
[  Table of contents  ]
---------------------------------
  01. jQuery MeanMenu
  02. wow js active
  03. scrollUp jquery active
  04. Portfolio  Masonry (height) 
  05. Portfolio  Masonry (width)
  06. CounterUp
  07. Owl Active
  08. Background Toutube Video 
  09. Testimonial Slick Carousel
  10. Testimonial Slick Carousel As Nav
  11. Back To Top 
  12. Parallax
  13. Sticky Header
  14. Tab panel

/*--------------------------------
[ End table content ]
-----------------------------------*/


(function($) {
    'use strict';



    if (window.location.href.includes('#')) {

    } else {
        $(window).scrollTop(0);
    }

    /*-------------------------------------------
      01. jQuery MeanMenu
    --------------------------------------------- */

    $('.mobile-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanScreenWidth: "767",
        meanRevealPosition: "right",
    });

    /*-------------------------------------------
      02. wow js active
    --------------------------------------------- */
    new WOW().init();


    /*-------------------------------------------
      03. scrollUp jquery active
    --------------------------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*-------------------------------------------
      04. Portfolio  Masonry (height)
    --------------------------------------------- */
    $('.tf-portfolio-container').imagesLoaded(function() {
        var $container = $('.tf-portfolio-container');
        $container.isotope({
            itemSelector: '.pro-item',
            filter: '*',
            transitionDuration: '0.7s',
            masonry: {
                columnWidth: '.pro-item:not(.wide)'
            }
        });

        // filter items on button click
        $('#tf-filters').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $container.isotope({ filter: filterValue });
        });

        // change is-checked class on buttons
        $('#tf-filters li').on('click', function() {
            $('#tf-filters li').removeClass('is-checked');
            $(this).addClass('is-checked');
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
            return false;
        });
    });

    /*-------------------------------------------
      05. Portfolio  Masonry (width)
    --------------------------------------------- */
    $('.tf-portfolio-page').imagesLoaded(function() {
        // filter items on button click
        $('#tf-filters').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $containerpage.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('#tf-filters li').on('click', function() {
            $('#tf-filters li').removeClass('is-checked');
            $(this).addClass('is-checked');
            var selector = $(this).attr('data-filter');
            $containerpage.isotope({ filter: selector });
            return false;
        });
        var $containerpage = $('.tf-portfolio-page');
        $containerpage.isotope({
            itemSelector: '.pro-item',
            filter: '*',
            transitionDuration: '0.7s',
            masonry: {
                columnWidth: 1
            }
        });
    });

    /*-----------------------------
      06. CounterUp
    -----------------------------*/
    $('.count').counterUp({
        delay: 60,
        time: 3000
    });

    /*-----------------------------
      07. Owl Active
    -----------------------------*/
    // slider owl active
    $('.slider-owl-active').owlCarousel({
        autoPlay: true,
        slideSpeed: 3000,
        pagination: true,
        navigation: false,
        items: 1,
        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
    });

    // portfolio details owl active
    $('.portfolio-owl-active').owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 5,
        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 5],
        itemsTablet: [768, 4],
        itemsMobile: [479, 3]
    });

    /*---------------------------------
      08. Background Toutube Video 
    ------------------------------------*/
    $('.youtube-bg').YTPlayer({});

    /*--------------------------------
      09. Testimonial Slick Carousel
    -----------------------------------*/
    $('.testimonial-text-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    /*---------------------------------------
      10. Testimonial Slick Carousel As Nav
    -----------------------------------------*/
    $('.testimonial-image-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.testimonial-text-slider',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '10px',
        responsive: [{
                breakpoint: 450,
                settings: {
                    dots: false,
                    slidesToShow: 3,
                    centerPadding: '0px',
                }
            },
            {
                breakpoint: 420,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]
    });
    /*----------------------------
      11. Back To Top 
    ------------------------------ */
    // hide #back-top first
    $('#back-top').on('hide');
    // fade in #back-top
    $(function() {
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top').on('click', function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

    /*---------------------------
      12. Parallax
    -----------------------------*/
    $('.tf-paralax').parallax('50%', 0.4);


    /*-------------------------------------------
      13. Sticky Header
    --------------------------------------------- */
    $('#sticky-header').headroom();



    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $('#sticky-header-with-topbar').removeClass('scroll-header');
        } else {
            $('#sticky-header-with-topbar').addClass('scroll-header');
        }
    });
    /*-------------------------------------------
      14. Tab panel
    --------------------------------------------- */
    $('.tp-portfolio-small-image a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })






    $('a[href*="##"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var e = $(this.hash.substring(1));
            if (e = e.length ? e : $("[name=" + this.hash.slice(1) + "]"), e.length) return $("html, body").animate({
                scrollTop: e.offset().top - 50
            }, 500), $("#collapse-1").slideToggle("slow"), !1
        }
    });




    $('#popper').click(function() {
        $('#collapse-1').slideToggle("slow");
    });





    var options = {
        data: ["Rondônia", "Acre", "Amazonas", "Roraima", "Pará", "Amapá", "Tocantins", "Maranhão", "Piauí", "Ceará", "Rio Grande do Norte", "Paraíba", "Pernambuco", "Alagoas", "Sergipe", "Bahia", "Minas Gerais", "Espírito Santo", "Rio de Janeiro", "São Paulo", "Paraná", "Santa Catarina", "Rio Grande do Sul", "Mato Grosso do Sul", "Mato Grosso", "Goiás", "Distrito Federal"],
        list: {
            match: {
                enabled: true
            }
        }
    };

    $("#estado").easyAutocomplete(options);




    var videoarray = ['',
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/BoCis-I8P5M" frameborder="0" allowfullscreen></iframe>',
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/aEn6xyH_B-g" frameborder="0" allowfullscreen></iframe>',
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/HeAKreKP56E" frameborder="0" allowfullscreen></iframe>',
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/CjUBJPM-vN0" frameborder="0" allowfullscreen></iframe>'
    ];

    var videoarray2 = ['',
        '<iframe height="100%" width="100%" src="https://www.youtube.com/embed/BoCis-I8P5M" frameborder="0" allowfullscreen></iframe>',
        '<iframe height="100%" width="100%" src="https://www.youtube.com/embed/aEn6xyH_B-g" frameborder="0" allowfullscreen></iframe>',
        '<iframe height="100%" width="100%" src="https://www.youtube.com/embed/HeAKreKP56E" frameborder="0" allowfullscreen></iframe>',
        '<iframe height="100%" width="100%" src="https://www.youtube.com/embed/CjUBJPM-vN0" frameborder="0" allowfullscreen></iframe>'
    ];


    $('.videoplay').click(function() {
        event.preventDefault();


        $('#vidcon').html(videoarray[$(this).attr('data-vid')]);
        $('#vidcon2').html(videoarray2[$(this).attr('data-vid')]);
    });



    // Instantiate the Bootstrap carousel
    $('.multi-item-carousel').carousel({
        interval: false
    });

    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    $('.multi-item-carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });



    $('.switcher').click(function() {
        event.preventDefault();


        $('#showcase').attr('src', $(this).attr('data-swtarget'));
    });


})(jQuery);