$(document).ready(function () {
    let app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initMapContacts();
    this.initModalPopup();
    this.initSliders();
    this.initPhoneMask();
    this.initQuiz();
};

// Checking the user's viewing device
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};
// Init contacts map
application.prototype.initMapContacts = function () {
    if($("#contactMap").length) {
        let coords = [52.042222,113.490637];

        ymaps.ready(init);
        function init(){
            let myMap = new ymaps.Map("contactMap", {
                    center: coords,
                    controls: [],
                    zoom: 16,
                }, {
                    searchControlProvider: 'yandex#search'
                }
            ),
            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'Космические праздники в Чите - Laserland',
            }),
            zoomControl = new ymaps.control.ZoomControl({
                options: {
                    size: "auto"
                }
            });

            myMap.geoObjects.add(myPlacemark);
            myMap.controls.add(zoomControl);
            myMap.behaviors.disable('scrollZoom');
        }
    }
};
// Init modal popup
application.prototype.initModalPopup = function () {
    if ($("[data-toggle='modal']").length) {
        let elemId = null;

        $(document).on("click", function (e) {
            if ($(".modal-overlay").is(e.target) || $(".modal-close").is(e.target)) {
                elemId = $(e.target).closest(".modal").attr("id");
                e.stopPropagation();
                $("body").removeClass("modal-is-visible compensate-for-scrollbar");
                $("#" + elemId).removeClass("is-visible");
            }
        });

        $("[data-toggle='modal']").on("click", function(e) {
            elemId = $(this).data("target");
            e.preventDefault();
            $(".modal").not("#" + elemId).removeClass("is-visible");
            $("#" + elemId).addClass("is-visible");
            $("body").addClass("modal-is-visible");
            if (!$('html').hasClass('touch')) {
                $("body").addClass("compensate-for-scrollbar");
            }

        });
    }
};
// Init sliders
application.prototype.initSliders = function () {
    // Reviews slider
    if ($(".js-reviews-slider").length) {
        let reviewSliderSettings = {
            slidesPerView: "auto",
            navigation: {
                nextEl: ".reviews-wrapper .swiper-button-next",
                prevEl: ".reviews-wrapper .swiper-button-prev",
            },
            pagination: {
                el: ".reviews-wrapper .swiper-pagination",
                type: "fraction",
            }
        };
        new Swiper(".js-reviews-slider", reviewSliderSettings);
    }

    // Staff slider
    if ($(".js-staff-slider").length) {
        let staffSliderSettings = {
            slidesPerView: "auto",
            spaceBetween: 20,
            /*navigation: {
                nextEl: ".staff-slider-wrapper .swiper-button-next",
                prevEl: ".staff-slider-wrapper .swiper-button-prev",
            },*/
            breakpoints: {
                768: {
                    spaceBetween: 30
                },
                992: {
                    spaceBetween: 40
                },
                1200: {
                    spaceBetween: 55
                }
            }
        };
        new Swiper(".js-staff-slider", staffSliderSettings);
    }
};
// Init phone mask
application.prototype.initPhoneMask = function () {
    if ($("input.isPhone").length) {
        $("input.isPhone").click(function(){
            $(this).setCursorPosition(4);
        }).mask("+7 (999) 999-99-99", {
            autoclear: false,
            clearIfNotMatch: true,
            clearMaskOnLostFocus: true
        });

        $.fn.setCursorPosition = function(pos) {
            if ($(this).get(0).setSelectionRange) {
                $(this).get(0).setSelectionRange(pos, pos);
            } else if ($(this).get(0).createTextRange) {
                var range = $(this).get(0).createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        };
    }
};
// Init quiz (for local)
application.prototype.initQuiz = function () {
    if ($(".modal").length) {
        $(window).resize(function () {
            if ($(window).width() < 831) {
                $(".quiz-row-3").before($(".quiz-r"));
            }
        });

        if ($(window).width() < 831) {
            $(".quiz-row-3").before($(".quiz-r"));
        }

        $(window).resize(function () {
            if ($(window).width() > 830) {
                $(".quiz-l").after($(".quiz-r"));
            }
        });

        if ($(window).width() > 830) {
            $(".quiz-l").after($(".quiz-r"));
        }

        function checkNextButton(){
            if($(".quiz-labels-row.active input:checked").length > 0){
                $(".quiz-status-next").addClass('active')
            } else{
                $(".quiz-status-next").removeClass('active')
            }
        }
        $('.quiz-labels-row label').click(function(){
            checkNextButton()
        });
        function data_num() {
            var data_num = $(".quiz-labels-row.active").attr("data-num");
            $(".quiz-status-line").attr("id", "id-" + data_num);
            $(".quiz-status-perc-span").text((data_num - 1) * 20 + "%");
            $(".quiz-status-line").css("width", (data_num - 1) * 20 + "%");
        }

        $(".quiz-labels-1 label").click(function () {
            $(".quiz-labels-row").removeClass("active");
            $(".quiz-labels-2").addClass("active");

            $(".inner-mess").removeClass("active");
            $(".inner-mess-2").addClass("active");
            data_num();
        });

        $(".quiz-labels-2 label").click(function () {
            $(".quiz-labels-row").removeClass("active");
            $(".quiz-labels-3").addClass("active");

            $(".inner-mess").removeClass("active");
            $(".inner-mess-3").addClass("active");
            data_num();
        });

        $(".quiz-labels-3 label").click(function () {
            $(".quiz-labels-row").removeClass("active");
            $(".quiz-labels-4").addClass("active");

            $(".inner-mess").removeClass("active");
            $(".inner-mess-4").addClass("active");
            data_num();
        });

        $(".quiz-labels-5 label").click(function () {
            $(".quiz-labels-row").removeClass("active");
            $(".quiz-labels-6").addClass("active");

            $(".quiz-row-1, .quiz-row-3").slideUp();

            $(".inner-mess").removeClass("active");
            $(".quiz-man, .quiz-man-mess").hide();
            $(".quiz-r").addClass("w460");
            $(".quiz-form-w").addClass("active");
            data_num();
        });

        $(".quiz-status-prev").click(function (e) {
            e.preventDefault();
            if (!$(".quiz-labels-row.active").hasClass("quiz-labels-not-prev")) {
                $(".quiz-labels-row.active")
                    .removeClass("active")
                    .prev()
                    .addClass("active");
                $(".inner-mess.active").removeClass("active").prev().addClass("active");
                data_num();
                checkNextButton()
            }
        });

        $(".quiz-status-next").click(function (e) {
            e.preventDefault();
            if($(this).hasClass('active')) {
                var num = parseInt($(".quiz-labels-row.active").attr("data-num")) + 1;
                $(".quiz-labels-row").removeClass("active");
                $(".quiz-labels-" + num).addClass("active");

                $(".inner-mess").removeClass("active");
                $(".inner-mess-" + num).addClass("active");
                data_num();
                checkNextButton();
            }
        });
    }
};
