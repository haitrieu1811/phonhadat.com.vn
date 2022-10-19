$(document).ready(function() {
    // Home: Carousel
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

    // Home: Nav
    $('.tab__pane-item').hide();
    $('.tab__pane-item.active').show();

    $('.tab__nav-item').click(function() {
        const href = $(this).attr('href');

        // Nav
        $('.tab__nav-item.active').removeClass('active');
        $(this).addClass('active');

        // Pane
        $('.tab__pane-item').hide();
        $('.tab__pane ' + href).fadeIn();

        return false;
    })

    // Back to top
    $(".back-to-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
     });
     
})