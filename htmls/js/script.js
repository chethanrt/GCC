jQuery(document).ready(function ($) {

    function openMenu() {
        $('.nav-links').addClass('open');
        $('#nav-overlay').addClass('open');
        $('#menu-btn').html('<i class="fas fa-times"></i>');
    }

    function closeMenu() {
        $('.nav-links').removeClass('open');
        $('#nav-overlay').removeClass('open');
        $('#menu-btn').html('<i class="fas fa-bars"></i>');
    }

    $('#menu-btn').on('click', function () {
        openMenu();
    });

    $('#close-btn').on('click', function () {
        closeMenu();
    });

    $('#nav-overlay').on('click', function () {
        closeMenu();
    });

});