/*-----------------------------------------------------------------------------------
 Theme Name: LEE
 Author: LEE
 Author URI: http://
 Version: 1.0.0
 Description: A Beautiful, Professional and Multipurpose Theme Made by LEE
 -----------------------------------------------------------------------------------*/

/* ----------------------------------------------------------------
 [Table of contents]
        - MobileMenu
        - PreLoader
        - AnimationScrollPage
        - CountTo
        - ParallaxBackground
        - Slider
        - InputFile
        - MegaMenu
        - ScrollToTop
        - LightBox
        - CustomTheme
        - PriceRange
        - CalcQuantity
        - Ads

 ------------------------------------------------------------------*/

'use strict';


//action
$(window).on('load', function () {
// $(window).load(function () {
    MasonryItem.init();
});


$(document).ready(function () {
    MobileMenu.init();
    PreLoader.init();
    AnimationScrollPage.init();
    CountTo.init();
    ParallaxBackground.init();
    Slider.init();
    InputFile.init();
    MegaMenu.init();
    ScrollToTop.init();
    // LightBox.init();
    CustomTheme.init();
    PriceRange.init();
    CalcQuantity.init();
    // TimTest.init();

    //Cart.init();


});
var Cart = function () {
    var _initInstances = function () {
        var step1 = $('#step1');
        var step2 = $('#step2');
        var step3 = $('#step3');
        var button = $('#buttonNextStep');

        step1.addClass('');
        button.addClass('unavailable');
        step2.addClass('unavailable');
        step3.addClass('unavailable');


        step1.find(':input').each(function () {
            var attr = $(this).attr('required')

            if (typeof attr !== typeof undefined && attr !== false) {
                $(this).addClass('unvalidated');


            }
        });


        $('#step1 :input').on('change keyup paste click', function (e) {

            var attr = $(this).attr('required');
            var value = $(this).val();


            if (typeof attr === typeof undefined) {
                $(this).removeClass('unvalidated');
            }


            if (typeof attr !== typeof undefined && attr !== false) {

                $(this).addClass('was-validated');

                if (value !=''){
                    $(this).removeClass('unvalidated');
                }
                else{
                    $(this).addClass('unvalidated');
                }

            }

            else {
                $(this).addClass('was-validated');
                $(this).removeClass('unvalidated');
            }

            //step2
            if (checkValidated(step1) === true) {
                step1.addClass('done');

                step2.addClass('available');
                step2.removeClass('unavailable')

                button.addClass('available');
                button.removeClass('unavailable')
            }
            else {
                step1.removeClass('done');

                step2.addClass('unavailable');
                step2.removeClass('available')

                button.addClass('unavailable');
                button.removeClass('available')
            }


            //step3
            var validateStep2 = $('#step2').hasClass('available');
            if (checkValidated(step2)  && validateStep2) {
                step2.addClass('done');

                step3.addClass('available');
                step3.removeClass('unavailable')
            }
            else {
                step2.removeClass('done');

                step3.addClass('unavailable');
                step3.removeClass('available')
            }


        });

        var checkValidated = function (obj) {
            var check = true;
            obj.find(':input[required]').each(function () {

                if ($(this).hasClass('unvalidated') === true) {
                    check = false;
                    return check;
                }
            });

            return check;

        };
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();
// preloader
var TimTest = function () {
    var _initInstances = function () {
        function convertDate(obj){
            var day = [];
            var timestamp;
            var date;
            var thisDate;
            var target;
            $(obj).each(function(){

                $(this).find('.timezonebar').remove();

                $(this).find('[data-timestamp]').each(function(i){

                    timestamp = parseInt($(this).attr('data-timestamp'),10);
                    date = new Date(timestamp * 1000);
                    day[i] = moment(date).format("DD");
                    thisDate = moment(date).format("DD.MM.YYYY");

                    target = '<tr class="green timezonebar"><td colspan="4" class="data1 timezone" data-timestamp="'+ timestamp +'" data-format="d.m.Y">'+thisDate+'</td></tr>'

                    if(i == 0) {
                        $(this).parent('tr').before(target);
                    }
                    if(i > 0 && day[i] !== day[i-1] ){
                        $(this).parent('tr').before(target);
                    }

                })
            });
        }

        convertDate('table');


    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();


// preloader
var PreLoader = function () {
    var _initInstances = function () {
        $('.animsition').animsition({
            // loadingClass: 'loader',
            inDuration: 900,
            outDuration: 500,
            linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([href^="javascript:void(0);"]):not([href^="callto:"]):not([href^="mailto:"])',
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

//Mmenu
var MobileMenu = function () {
    var _initInstances = function () {
        $("#menu").mmenu({
            "navbars": [
                {
                    "position": "bottom",
                    "content": [
                        "<a class='fa fa-facebook' href='#/'></a>",
                        "<a class='fa fa-twitter' href='#/'></a>",
                        "<a class='fa fa-youtube' href='#/'></a>",
                        "<a class='fa fa-instagram' href='#/'></a>",
                    ]
                }
            ]
        });

        //close
        var API = $("#menu").data("mmenu");
        $("#hamburger").click(function () {
            API.close();
        });
    };


    return {
        init: function () {
            _initInstances();
        }
    };
}();

// animation scroll page
var AnimationScrollPage = function () {
    var _initInstances = function () {
        $('.animation').waypoint(function (direction) {
            $(this.element).addClass('animation-active');
        }, {
            offset: '90%',
            triggerOnce: true
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// count to
var CountTo = function () {
    var _initInstances = function () {
        var itemCount = $('.vk-counter .number-count');
        $(itemCount).waypoint({
            handler: function (direction) {
                $(this.element).countTo({
                    from: 0,
                    speed: 2000,
                    refreshInterval: 50,
                    formatter: function (value, options) {
                        return numeral(value).format('0,0');
                    }
                });
            },
            offset: '100%',
            triggerOnce: true,
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// parallax background
var ParallaxBackground = function () {
    var _initInstances = function () {
        $('.vk-parallax').attr('data-stellar-background-ratio', '0.3');
        $.stellar({
            verticalOffset: 0,
            horizontalScrolling: false,
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// slider
var Slider = function () {

    var homepageSlider = function () {

        $('[data-slider="home-slider"]').slick({
            arrows:false,
            slidesToShow: 1,
            dots:true,
            dotsClass:'vk-arrow-dots vk-list vk-list-inline',
            autoplay: true,
            swipeToSlide: true,

            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        arrows: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 567,
                    settings: {
                        slidesToShow: 1,
                        arrows: false

                    }
                }
            ],
        })

    };

    var shopSlider = function () {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            infinite: false,
            asNavFor: '.slider-nav'
        });

        $('.slider-nav').slick({
            prevArrow: '<button class="vk-btn vk-arrow prev"><img src="images/icon/slider/arrow-left-1.png" alt=""></button>',
            nextArrow: '<button class="vk-btn vk-arrow next"><img src="images/icon/slider/arrow-right-1.png" alt=""></button>',

            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            asNavFor: '.slider-for',
            dots: false,
            swipeToSlide: true,
            centerMode: false,
            focusOnSelect: true
        });


        $('.vk-slider[data-slider="shop-related"]').slick({
            arrows: false,
            slidesToShow: 4,
            autoplay: true,
            swipeToSlide: true,

            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        arrows: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 567,
                    settings: {
                        slidesToShow: 1,
                        arrows: false

                    }
                }
            ],
        })
        $('[data-slider="product-banner"]').slick({
            prevArrow: '<button class="vk-btn vk-arrow prev"><img src="images/icon/slider/arrow-left.png" alt=""></button>',
            nextArrow: '<button class="vk-btn vk-arrow next"><img src="images/icon/slider/arrow-right.png" alt=""></button>',
            slidesToShow: 1,
            autoplay: true,
            swipeToSlide: true,

        })

    };

    var arrowsJustifyAround = function () {

        var obj = $('[data-arrows="justify-around"]');
        var arrowDots = obj.find('.vk-arrow-dots');

        var arrowPrev = obj.find('.vk-arrow.prev');
        var arrowNext = obj.find('.vk-arrow.next');

        var distanceOffset = 5;

        var dotsNavWidth = arrowDots.width();

        var distanceFromBetween = parseFloat(dotsNavWidth / 2) + distanceOffset;


        var currentWidth = $(window).width();

        if (currentWidth > 991) {
            arrowPrev.css('transform', 'translateX(calc(-100% - ' + distanceFromBetween + 'px))');
            arrowNext.css('transform', 'translateX(calc(100% + ' + distanceFromBetween + 'px))');
        }
        return false;

    }

    var _initInstances = function () {

        homepageSlider();
        shopSlider();
        arrowsJustifyAround();


    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// masonry item
var MasonryItem = function () {
    var masonry = '[data-layout="masonry"]';
    var masonryItem = '[data-layout="masonry-item"]'
    var masonryFix = '[data-layout="masonry-fix"]';

    var buttonFilterDefault = '[data-filter-button="default"]';
    var buttonFilterFix = '[data-filter-button="filter-fix"]';

    var filterFix = function () {

        var delayFilter = function () {
            $(masonryFix).isotope({
                filter: '.first',
            })
        }

        setTimeout(delayFilter, 100);
        $(buttonFilterFix)

            .on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                console.log(filterValue)
                $(masonryFix).isotope({
                    filter: filterValue,
                });

                return false;
            })
            .on('change', function () {

                // get filter value from option value
                var filterValue = this.value;
                $(masonryFix).isotope({
                    filter: filterValue,

                });

                return false;
            });

    }

    var masonryLayout = function () {
        $(masonry).isotope({
            // options...
            itemSelector: masonryItem,
            masonry: {
                columnWidth: masonryItem,
            }
        });

        //filter items on button click
        $(buttonFilterDefault)
            .on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                console.log(filterValue);
                $(masonry).isotope({
                    filter: filterValue,

                });

                return false;
            })
            .on('change', function () {
                // get filter value from option value
                var filterValue = this.value;
                // console.log(filterValue);
                $(masonry).isotope({
                    filter: filterValue,

                });

                return false;
            });
    };

    var _initInstances = function () {
        masonryLayout();
        filterFix();

    };

    return {
        init: function () {
            _initInstances();
        },

        responsive: function () {

        }
    };
}();


// google maps

if ($('[data-map="true"]').length) {
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyC2Gs0Rw7L416l5ghD0zrUWf8FGibwT7Ds&callback=initMap";
    document.getElementsByTagName('head')[0].appendChild(script);

    var initMap = function () {
        var myLatLng = {lat: 38.5397102, lng: -93.6881803};
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 4
        });
        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'HELLO WORLD!'
        });
    };

}


// input file
var InputFile = function () {
    var _initInstances = function () {
        var inputs = document.querySelectorAll('.vk-input-file');
        Array.prototype.forEach.call(inputs, function (input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener('change', function (e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });

            // Firefox bug fix
            input.addEventListener('focus', function () {
                input.classList.add('has-focus');
            });
            input.addEventListener('blur', function () {
                input.classList.remove('has-focus');
            });
        });
    }
    return {
        init: function () {
            _initInstances();
        }
    };
}();


// mega menu
var MegaMenu = function () {

    var _initInstances = function () {

        var menu = $('.vk-navbar-nav.child');
        var valueAction = 'shortcodes';
        var target = '.vk-header .container';

        var array = menu.siblings();

        for (var i = 0; i < array.length; i++) {

            var itemCurrent = $(array[i]).text().toLowerCase();

            if (itemCurrent == valueAction) {

                $(array[i]).siblings().addClass('vk-mega-menu');

            }
        }

    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

//scroll up
var ScrollToTop = function () {

    var _initInstances = function () {
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            scrollSpeed: 500,
            zIndex: 1,

        });

        $('[data-scroll-to]').on('click', function (event) {

            var target = $(this.getAttribute('data-scroll-to'));
            console.log(target)


            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top

                }, 1000);


            }

        });

    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// lightbox otion
var LightBox = function () {

    var _initInstances = function () {
        lightbox.option({
            disableScrolling: true,
            showImageNumberLabel: false,
            wrapAround: true,
            alwaysShowNavOnTouchDevices: true
        })
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();


// price range
var PriceRange = function () {
    var _initInstances = function () {
        var slider_range = '#slider-range';
        var amount1 = '#amount1';
        var amount2 = '#amount2';
        $(slider_range).slider({
            range: true,
            min: 0,
            max: 1000,
            values: [59, 799],
            slide: function (event, ui) {
                $(amount1).val(ui.values[0]);
                $(amount2).val(ui.values[1]);
            }
        });
        $(amount1).val($(slider_range).slider("values", 0));
        $(amount2).val($(slider_range).slider("values", 1));
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// calculator quantity
var CalcQuantity = function () {
    var _initInstances = function () {

        $("[data-calculator] button").on("click", function () {


            var $button = $(this);

            var oldValue = $button.siblings("input").val();

            if ($button.attr('data-index') == "plus") {

                var newVal = parseFloat(oldValue) + 1;

            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }

            $button.siblings("input").val(newVal);

            return false;
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// custom theme
var CustomTheme = function () {

    var _initInstances = function () {

        $('[data-toggle="tooltip"]').tooltip();


        // disable event click a tag
        $('a').on("click", function (e) {
            if ($(this).attr('href') === undefined) {
                e.preventDefault();
                return false;
            }
        });

    }

    return {
        init: function () {
            _initInstances();
        }
    };
}();









