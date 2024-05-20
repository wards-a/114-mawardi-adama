// carousel
$(document).ready(() => {
    // product detail carousel
    $('.image_to_show').slick({
        mobileFirst: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.images_carousel'
      });
    $('.images_carousel').slick({
        infinite: false,
        mobileFirst: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        asNavFor: '.image_to_show',
        focusOnSelect: true,
        arrows: false,
      });
});
