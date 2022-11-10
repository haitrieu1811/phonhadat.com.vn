$(document).ready(function () {
    $('.owl-carousel-home').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplaySpeed:800,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    })

    $('.owl-carousel-project').owlCarousel({
        loop:false,
        margin:24,
        nav:true,
        autoplay:true,
        autoplayTimeout:6000,
        autoplaySpeed:300,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    })

    $('.owl-carousel-product-detail').owlCarousel({
        loop:false,
        margin:12,
        nav:true,
        autoplay:true,
        autoplayTimeout:6000,
        autoplaySpeed:300,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    })
});