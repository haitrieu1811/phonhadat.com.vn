$(document).ready(function() {
    // Back to top
    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $(".back-to-top").fadeIn();
        } else {
            $(".back-to-top").fadeOut();
        }
    });

    $(".back-to-top").click(function () {
        $("html, body").animate({scrollTop: 0});
     });

    // Clear toast
    setTimeout(() => {
        $('.toast').fadeOut();
    }, 4000);

    // Product.detail info float
    $(window).scroll(function(){
        let spaceToTop = $(window).scrollTop();
        let infoFloat = $('.product-detail__info-float');

        if(spaceToTop > 780){
            infoFloat.addClass('active');
        }else{
            infoFloat.removeClass('active');
        }
    })
})