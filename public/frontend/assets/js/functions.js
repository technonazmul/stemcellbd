(function ($) {
    "use strict";
    $(window).on('load', function () {
        $('.preloader').fadeOut(1000);
        new WOW().init();

        // lightcase 
        $('a[data-rel^=lightcase]').lightcase();
    })


    $(document).ready(function () {

        /*==== header Section Start here =====*/
        $("ul>li>ul").parent("li").addClass("menu-item-has-children");
        // drop down menu width overflow problem fix
        $('ul').parent('li').on('hover', function () {
            var menu = $(this).find("ul");
            var menupos = $(menu).offset();
            if (menupos.left + menu.width() > $(window).width()) {
                var newpos = -$(menu).width();
                menu.css({
                    left: newpos
                });
            }
        });
        $('ul li a').on('click', function (e) {
            var element = $(this).parent('li');
            if (screen.width < 1200) {
                if (element.hasClass('open')) {
                    element.removeClass('open');
                    element.find('li').removeClass('open');
                    element.find('ul').slideUp(300, "swing");
                } else {
                    element.addClass('open');
                    element.children('ul').slideDown(300, "swing");
                    element.siblings('li').children('ul').slideUp(300, "swing");
                    element.siblings('li').removeClass('open');
                    element.siblings('li').find('li').removeClass('open');
                    element.siblings('li').find('ul').slideUp(300, "swing");
                }
            }
        })

        $('.header__ellepsis').on('click', function (e) {
            var element = $('.header__top');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.slideUp(300, "swing");
                $('.overlayTwo').removeClass('active');
            } else {
                element.addClass('open');
                element.slideDown(300, "swing");
                $('.overlayTwo').addClass('active');
            }
        });
        $('.header__bar').on('click', function () {
            $(this).toggleClass('active');
            $('.menupart').toggleClass('active');
        })
        

        

        //Header
        var fixed_top = $(".header");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 250) {
                fixed_top.addClass("header--fixed animated fadeInDown");
            } else {
                fixed_top.removeClass("header--fixed animated fadeInDown");
            }
        });


        /*==== header Section End here =====*/

        // scroll up start here
        $(function () {
            $(window).on('scroll', function () {
                if ($(this).scrollTop() > 300) {
                    $('.scrollToTop').css({
                        'bottom': '3%',
                        'opacity': '1',
                        'transition': 'all .5s ease'
                    });
                } else {
                    $('.scrollToTop').css({
                        'bottom': '-30%',
                        'opacity': '0',
                        'transition': 'all .5s ease'
                    })
                }
            });

            //Click event to scroll to top
            $('a.scrollToTop').on('click', function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });


        //Odometer
        $(".odometer").each(function () {
            $(this).isInViewport(function (status) {
            if (status === "entered") {
                for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                var el = document.querySelectorAll('.odometer')[i];
                el.innerHTML = el.getAttribute("data-odometer-final");
                }
            }
            });
        });


        // product view mode change js
        $(function() {
            $('.shop__mode').on('click', 'a', function (e) {
                e.preventDefault();
                var shopProductWrap = $('.shop__product');
                var viewMode = $(this).data('target');
                $('.shop__mode a').removeClass('active');
                $(this).addClass('active');
                shopProductWrap.removeClass('grids lists').addClass(viewMode);
            });
        });


        //Review Tabs
        $('.review__nav').on('click', 'li', function (e) {
            e.preventDefault();
            var reviewContent = $('.review__content');
            var viewRev = $(this).data('target');
            $('.review__nav li').removeClass('active');
            $(this).addClass('active');
            reviewContent.removeClass('review-content-show description-show').addClass(viewRev);
        });

        // shop cart + - start here
        var CartPlusMinus = $('.cart-plus-minus');
        $(".qtybutton").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1 ;
                } else {
                    newVal = 1;
                }
            }
            $button.parent().find("input").val(newVal);
        });


        // Testimonial slider start here
        var swiper = new Swiper('.testimonial__slider', {
            slidesPerView: 2,
            spaceBetween: 30,
            speed: 1500,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
				991: {
					slidesPerView: 1,
				},
			},
            pagination: {
                el: ".testimonial__pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                },
            },
            loop: true,
        });

        

    });
}(jQuery));

