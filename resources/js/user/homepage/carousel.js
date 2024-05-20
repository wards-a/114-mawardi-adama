// carousel
$(document).ready(function () {
    // banner banner
    $('.carousel').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        easing: 'ease-in-out',
        speed: 700,
        dots: true,
        mobileFirst: true,
    });

    // product
    $('.product-carousel').slick({
        mobileFirst: true,
        infinite: false,
        variableWidth: true,
        responsive: [{
            breakpoint: 320,
            settings: {
                slidesToShow: 1,
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 640,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5
            }
        }, {
            breakpoint: 1120,
            settings: {
                slidesToShow: 6
            }
        }],
    });
});
