
var owl = $('#popular_course_item');

owl.owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

$('.owl-next').click(function() {
    owl.trigger('next.owl.carousel');
});

$('.owl-prev').click(function() {
    owl.trigger('prev.owl.carousel');
});



