$(document).ready(function(){
    // Sidebar
    // $(".sidebar-navigation__item-submenu").hide();
    $(".sidebar-navigation__item-list-item-link.toggle").click(function(){
        const parent = $(this).closest(".sidebar-navigation__item-list-item");
        const children = parent.find(".sidebar-navigation__item-submenu");

        children.slideToggle();
        parent.toggleClass("active");

        return false;
    });
})