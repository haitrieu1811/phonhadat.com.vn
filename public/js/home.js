$(document).ready(function () {
    // Tab nav
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
});