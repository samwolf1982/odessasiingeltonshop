$('.owl-carousel').owlCarousel({
    // items:5,
    nav: true,
    dots:false,
    navText: ["<img class='simple_load' src='/images/chevron-sign-to-right copy.png'>","<img class='simple_load' src='/images/chevron-sign-to-right.png'>"],
    merge:true,
    loop:true,
    autoWidth:false,

    // navigation : true,
    // margin:10,
    // video:true,
    lazyLoad:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1024:{
            items:3,
            nav:true,
            loop:false
        },

        1200:{
            items:3,
            nav:true,
            loop:false
        },
        1366:{
            items:3,
            nav:true,
            loop:false
        },

        1440:{
            items:3,
            nav:true,
            loop:false
        },
        1441:{
            items:4,
            nav:true,
            loop:false
        },
    }
    // center:true,
    // responsive:{
    //     480:{
    //         items:2
    //     },
    //     600:{
    //         items:4
    //     }
    // }
});
$(function () {
    $('.datetimepicker').datetimepicker({
        format: 'H:mm',
    });
});
$(function() {
});