var testimonialSlick = null;
jQuery(function($) {
    var $ = jQuery;
    if($(document).width() > 575) {
        var waypoint = new Waypoint({
            element: document.getElementById('header'),
            handler: function() {
                $(".home #header").toggleClass('background');
                $(".home #header .logo").toggleClass('ani-show');
            },
            offset: -10
        });
    }
    var waypoint = new Waypoint({
        element: document.getElementById('header'),
        handler: function() {
            $(".top").toggleClass('show');
        },
        offset: -500
    });
    $(".menu-toggle").click(function() {
        $("#menu-wrapper").toggleClass('open-menu');
        $(this).toggleClass('close-btn');
    });
    testimonialSlick = $(".testimonials-wrapper").slick({
        dots:false,
        speed: 300,
        slidesToShow: 1,
        arrows: true,
        adaptiveHeight: true
    });
    $('.top').click(function(event){
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    if($(".form-wrapper").length) {
        if($(".wpcf7-dynamichidden").val() != "") {
            var $checkboxes = $('.form-wrapper').find('input[type=checkbox]');
            $checkboxes.each(function (index) {
                if($(".wpcf7-dynamichidden").val() == "cottage-by-the-sea") {
                    if(index == 1) {
                        $(this).prop('checked', true);
                    }
                }
                if($(".wpcf7-dynamichidden").val() == "seacliff-villa") {
                    if(index == 0) {
                        $(this).prop('checked', true);
                    }
                }
                if($(".wpcf7-dynamichidden").val() == "reef") {
                    if(index == 2) {
                        $(this).prop('checked', true);
                    }
                }
                if($(".wpcf7-dynamichidden").val() == "sandpiper") {
                    if(index == 3) {
                        $(this).prop('checked', true);
                    }
                }
            });
        }
    }
});