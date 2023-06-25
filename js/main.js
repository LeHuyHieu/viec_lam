$(window).scroll(function () {
    // Get number of pixels of scroll.
    var pixel = $(window).scrollTop();
    // console.log(pixel);
    // When the scroll exceeds 300px, give the [fixed-menu] class.
    if (pixel >= 150) {
        $('.navbar').addClass('fixed-menu');
    } else {
        $('.navbar').removeClass('fixed-menu');
    }
});

$(document).ready(function () {
    $(".navbar__icon").click(function () {
        $(".navbar").toggleClass("tranform0");
    });
    $(".click__item--navbar").click(function () {
        $(".show_megamenu").toggleClass("h100");
        $(".show_megamenu1").removeClass("h100");
        $(".show_megamenu2").removeClass("h100");
        $(".show_megamenu3").removeClass("h100");
    });
    $(".click__item--navbar1").click(function () {
        $(".show_megamenu1").toggleClass("h100");
        $(".show_megamenu").removeClass("h100");
        $(".show_megamenu2").removeClass("h100");
        $(".show_megamenu3").removeClass("h100");
    });
    $(".click__item--navbar2").click(function () {
        $(".show_megamenu2").toggleClass("h100");
        $(".show_megamenu").removeClass("h100");
        $(".show_megamenu1").removeClass("h100");
        $(".show_megamenu3").removeClass("h100");
    });
    $(".click__item--navbar3").click(function () {
        $(".show_megamenu3").toggleClass("h100");
        $(".show_megamenu").removeClass("h100");
        $(".show_megamenu1").removeClass("h100");
        $(".show_megamenu2").removeClass("h100");
    });
    $(".click__item--navbar4").click(function () {
        $(".show_megamenu4, .show_megamenu1").toggleClass("h100");
    });
});

var typed2 = new Typed('.typed', {
    strings: ["First sentence.", "Second sentence."],
    typeSpeed: 100,
    backSpeed: 100,
    fadeOut: true,
    loop: true
});

$(".chosen-select").chosen({ allow_single_deselect: true, width: "70%" });

$('.single-item').slick();

$('.center').slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    speed: 300,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }
    ]
});

