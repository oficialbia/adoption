/*
 Transit by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
 */

(function ($) {

    skel.init({
        reset: 'full',
        breakpoints: {
            global: {
                href: 'css/style.css',
                containers: 1400,
                grid: {gutters: ['2em', 0]}
            },
            xlarge: {
                media: '(max-width: 1680px)',
                href: 'css/style-xlarge.css',
                containers: 1200
            },
            large: {
                media: '(max-width: 1280px)',
                href: 'css/style-large.css',
                containers: 960,
                grid: {gutters: ['1.5em', 0]},
                viewport: {scalable: false}
            },
            medium: {
                media: '(max-width: 980px)',
                href: 'css/style-medium.css',
                containers: '90%!'
            },
            small: {
                media: '(max-width: 736px)',
                href: 'css/style-small.css',
                containers: '90%!',
                grid: {gutters: ['1.25em', 0]}
            },
            xsmall: {
                media: '(max-width: 480px)',
                href: 'css/style-xsmall.css'
            }
        },
        plugins: {
            layers: {
                config: {
                    mode: 'transform'
                },
                navButton: {
                    breakpoints: 'medium',
                    height: '4em',
                    html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span>',
                    position: 'top-left',
                    side: 'top',
                    width: '6em'
                },
                navPanel: {
                    animation: 'overlayX',
                    breakpoints: 'medium',
                    clickToHide: true,
                    height: '100%',
                    hidden: true,
                    html: '<div data-action="moveElement" data-args="nav"></div>',
                    orientation: 'vertical',
                    position: 'top-left',
                    side: 'left',
                    width: 250
                }
            }
        }
    });

    $(function () {

        var $window = $(window),
                $body = $('body');

        // Disable animations/transitions until the page has loaded.
        $body.addClass('is-loading');

        $window.on('load', function () {
            $body.removeClass('is-loading');
        });

    });

    $(document).on('ready', function () {
        var slide = $('.slider-single');
        var slideTotal = slide.length - 1;
        var slideCurrent = -1;

        function slideInitial() {
            slide.addClass('proactivede');
            setTimeout(function () {
                slideRight();
            }, 500);
        }

        function slideRight() {
            if (slideCurrent < slideTotal) {
                slideCurrent++;
            } else {
                slideCurrent = 0;
            }

            if (slideCurrent > 0) {
                var preactiveSlide = slide.eq(slideCurrent - 1);
            } else {
                var preactiveSlide = slide.eq(slideTotal);
            }
            var activeSlide = slide.eq(slideCurrent);
            if (slideCurrent < slideTotal) {
                var proactiveSlide = slide.eq(slideCurrent + 1);
            } else {
                var proactiveSlide = slide.eq(0);

            }

            slide.each(function () {
                var thisSlide = $(this);
                if (thisSlide.hasClass('preactivede')) {
                    thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
                }
                if (thisSlide.hasClass('preactive')) {
                    thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
                }
            });
            preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
            activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
            proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
        }

        function slideLeft() {
            if (slideCurrent > 0) {
                slideCurrent--;
            } else {
                slideCurrent = slideTotal;
            }

            if (slideCurrent < slideTotal) {
                var proactiveSlide = slide.eq(slideCurrent + 1);
            } else {
                var proactiveSlide = slide.eq(0);
            }
            var activeSlide = slide.eq(slideCurrent);
            if (slideCurrent > 0) {
                var preactiveSlide = slide.eq(slideCurrent - 1);
            } else {
                var preactiveSlide = slide.eq(slideTotal);
            }
            slide.each(function () {
                var thisSlide = $(this);
                if (thisSlide.hasClass('proactivede')) {
                    thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
                }
                if (thisSlide.hasClass('proactive')) {
                    thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
                }
            });
            preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
            activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
            proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
        }
        var left = $('.slider-left');
        var right = $('.slider-right');
        left.on('click', function () {
            slideLeft();
        });
        right.on('click', function () {
            slideRight();
        });
        slideInitial();
    });



})(jQuery);


