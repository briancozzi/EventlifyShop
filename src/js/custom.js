var chart;
$(document).ready(function() {
    cals.init({
        slick: $("[data-slick]"),
        selectpicker: $(".selectpicker"),
        innerscroll: $(".inner-scroll"),

        datepicker_inline: $("#datepicker_inline"),
        timepicker: $("#timepicker, #timepicker2, #timepicker3, #timepicker4"),
        datepicker: $("#datepicker"),
        datepicker2: $("#datepicker2"),
        load_more_btn: ".load-more a",
        load_more_container: ".load-items-container",

    });
});

var self;
var cals = {
    init: function(options) {
        this.settings = options;
        self = this;
        this.utilities();
        this.configureModal();
        this.datepickers();
        this.selectpicker();
        this.Slider();
        this.stickyHeader();
        this.loadmoreitems();

    },

    // selectpicker
    selectpicker: function() {
        $.fn.selectpicker.Constructor.BootstrapVersion = '4';
        if (/Android|webOS|iPhone|BlackBerry/i.test(navigator.userAgent)) {
            $.fn.selectpicker.Constructor.DEFAULTS.mobile = true;
        }
        cals.settings.selectpicker.selectpicker({
            container: 'body',
            size: 8,
            liveSearchPlaceholder: 'Search'
        });
    },
    Slider: function() {
        $('.product-details__main-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            loop:false,
            infinite: false,
        });
            $('.product-details__thumb-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.product-details__main-slider',
            focusOnSelect: true,
            infinite: false,
             arrows: true,
              loop:false,
              appendArrows: $(".product-details__thumb-slider--slider-nav"),
            nextArrow: '<button class="right-arrow"><img src="src/images/svg/right-arrow.svg"></button>',
            prevArrow: '<button class="left-arrow"><img src="src/images/svg/left-arrow.svg"></button>',
        });
    
    },
    loadmoreitems: function() {
        $(this.settings.load_more_btn).on("click", function(e) {
            e.preventDefault();
            var prnt = $(this);
            var dataurl = $(this).attr("data-path");
            if (dataurl) {
                $(".load-more").addClass("loading");
                setTimeout(function() {
                    $.ajax({
                        url: dataurl,
                        dataType: "html",
                        success: function(responseText) {
                            if (responseText != "") {
                                var dataToInsert = $.parseHTML(responseText);
                                $(self.settings.load_more_container).append(dataToInsert);
                                //contentWayPoint();
                            }
                            $(".load-more").removeClass("loading");
                        }
                    })
                }, 1000);
            }
        });
    },
    stickyHeader: function() {
        $(window).scroll(function() {

            if ($(this).scrollTop() > 110) {
                $("header").addClass("sticky");

            } else {
                $("header").removeClass("sticky");

            }
        });
    },
    utilities: function() {
        $(".touchspin").TouchSpin({
            min: 12
        });

        
        $('#searchInput').keyup(function () {
        if ($(this).val() == '') {
            $('.apply').prop('disabled', true);
        } else {
            $('.apply').prop('disabled', false);
        }
    });


    },
    // datepickers
    datepickers: function() {
        this.settings.timepicker.datetimepicker({
            format: 'LT',
            ignoreReadonly: true,
            keepOpen: false,
        });
        this.settings.datepicker_inline.datetimepicker({
            inline: true,
            format: 'DD/MM/YYYY',
        });
        this.settings.datepicker.datetimepicker({
            format: 'L',
            keepOpen: false,
            ignoreReadonly: true,
        });
        this.settings.datepicker2.datetimepicker({
            format: 'L',
            keepOpen: false,
            ignoreReadonly: true,
        });
    },
    // modal
    configureModal: function() {
        $("body").on("click", "*[data-toggle='custom-modal']", function(e) {
            e.preventDefault();
            $(".custom-modal").removeClass("large");
            var url = $(this).attr("data-path");
            var size = $(this).attr("data-size");
            var class_name = $(this).attr("data-class");
            $(".custom-modal").removeClass("large");
            $(".custom-modal").removeClass("medium");
            $(".custom-modal").removeClass("small");
            $.get(url, function(data) {
                $(".custom-modal").modal("show");
                $(".custom-modal .modal-body").html(data);

                if (size) {
                    $(".custom-modal").addClass(size);
                }
                if (class_name) {
                    $(".custom-modal").addClass(class_name);
                }
                setTimeout(function() {
                    $(".custom-modal .modal-body").addClass("show");
                }, 200);
                $("body").addClass("remove-scroll");
            });
        });
        $(".modal").on("hidden.bs.modal", function() {
            $(".custom-modal .modal-body").removeClass("show");
            $(".custom-modal .modal-body").empty();
            $(".custom-modal").removeClass("account-modal");
            $("body").removeClass("remove-scroll");
            $(".custom-modal").removeClass("large");
            $(".custom-modal").removeClass("medium");
            $(".custom-modal").removeClass("small");
        });
    },


};