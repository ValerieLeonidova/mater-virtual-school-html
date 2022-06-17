// $(window).on('load', function () {
    $(".loader").delay(400).fadeOut("slow");
    new WOW().init();
// });

$(function () {

    (function mobileBtn() {
        var mobileBtnOpen = $('.open-nav-btn'),
            mobileMenu = $('.header-nav');

        mobileBtnOpen.on('click', function(){
            mobileMenu.toggleClass('show');
            $(this).toggleClass('active');
            $('.overlay').toggleClass('show');
            $('body').toggleClass('no-scroll');
            $('html').toggleClass('no-scroll');
        });
    }());

// header when the user scrolls the page
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100){
            $('.header').addClass("header--colored");
        }
        else{
            $('.header').removeClass("header--colored");
        }
    });

// scroll page to top
    $('.scroll-circle-link').on('click', function (e) {
        $('body,html').animate({
            scrollTop : 0
        }, 500);
        e.preventDefault();
    });

// open sidebar-menu on small devices
    $('.sidebar-open').on('click', function (e) {
        e.preventDefault();
        $('.sidebar-menu').slideToggle();
        $(this).toggleClass('sidebar-open--active');
    });

// open drop-down in main menu on small devices
    if ($(window).outerWidth() < 1200) {


        $('.header-nav>ul>li').each(function(){
            if ($(this).children('div').hasClass( "drop" )) {
                $(this).children('a').addClass('with-drop');
            }
        });

        $(".with-drop").on('click', function (e) {
            e.preventDefault();
            $(this).toggleClass('opened');
            $(this).closest('li').find('.drop').slideToggle('');
        });

    }
// progressbar when the user scrolls the page
    window.onscroll = function() {myFunction()};

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("progressBar").style.height = scrolled + "%";
        document.getElementById("scroll-text").style.transform = 'rotate(' + scrolled + 'deg)';
        if ( (scrolled === 100)) {
            $('.scroll').addClass('active');
        } else {
            $('.scroll').removeClass('active');
        }
    }

    if ($(window).outerWidth() > 767) {

        $(".text-scroll").mCustomScrollbar({
            theme:"minimal"
        });

    }

    $('.slider').slick({
        dots: true,
        fade: true,
        cssEase: 'linear',
        speed: 600,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    fade: false,

                }
            }
        ]
    });

    // lightgallery for image gallery
    $('.lightgallery').lightGallery({
        selector: '.album-image',
        share: false,
        rotate: false,
        hash: false
    });

});







