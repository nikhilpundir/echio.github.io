$(document).ready(function() {
    $(".testimonial-carousel-test").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        responsive: [{
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }],
        prevArrow: $(".testimonial1-carousel-controls-testp .prev"),
        nextArrow: $(".testimonial1-carousel-controls-testp .next")
    });
});
$(document).ready(function() {
    $(".testimonial-carousel").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        responsive: [{
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }],
        prevArrow: $(".testimonial-carousel-controls .prev"),
        nextArrow: $(".testimonial-carousel-controls .next")
    });
});