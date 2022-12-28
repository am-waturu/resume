
(function ($) {
    "use strict";

    $(window).on('load', function () {

        /* 01. PreLoader Init
        ============================ */
        function preLoader() {
            setTimeout(function () {
                $('#preloader .scroll-static').addClass('loaded');
                setTimeout(function () {
                    $('#preloader').addClass('loaded');

                    splitInit();
                    $('.loader__content').addClass('loaded');

                    setTimeout(function () {
                        $('#preloader').remove();
                    }, 400);
                }, 600);
            }, 1000);
        };
        preLoader();

        // 02. splitInit init
        function splitInit() {
            Splitting();
        }


    });


    $(document).ready(function () {

        darkModeActive();
        menuInit();
        pageTransition();

        // 03. darkModeActive init
        function darkModeActive() {
            if($.cookie("isDarkModeActive") == 1) {
                $("body").addClass("dark__mode");
            }
            $(".color__chooser_toggle").on('click', function() {
                if($("body").hasClass("dark__mode") == true) {
                    $("body").removeClass("dark__mode");
                    $.cookie("isDarkModeActive", "0", {expires: 365});
                } else {
                    $("body").addClass("dark__mode");
                    $.cookie("isDarkModeActive", "1", {expires: 365});
                }
            });
        };


        // 04. menu-wrapper init
        function menuInit() {
            $('.navigation__toggle').on('click', function() {
                $(this).toggleClass('navigation__close');
                $('.navigation').toggleClass('navigation_show');
                $('.main__content').toggleClass('main__content_hide');
            });

            $('.submenu__wrap .nav__label_inner').siblings('.sub__menu.show').slideDown();
            $('.submenu__wrap .nav__label_inner').on('click', function( e ) {
                e.preventDefault();
                var $this = $(this).siblings('.sub__menu');
                if ($this.hasClass('show')) {
                    $this.removeClass('show').slideUp();
                } else {
                    $('.submenu__wrap .nav__label_inner').siblings('.sub__menu').removeClass('show').slideUp();
                    $this.slideToggle().toggleClass('show');
                }
            });
        };

        // 05. page transition init
        function pageTransition() {
            $('a').not('[href="#"]').not('[href="#0"]').not('.ajax-popup-link').on('click', function (e) {
                e.preventDefault();
                var href = this.getAttribute('href');
                $('body').addClass('page__tran');
                setTimeout(function() {
                    window.location = href;
                },510);
            });
        }

    });





})(jQuery);