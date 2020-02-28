// MODAL WINDOW
//hamburger
$('#menuToggle').on('click',function() {
    $('.menu-modal').toggle();
    $('#modal').toggle();
});
//close bg
$('#modal').on('click',function() {
    $('.menu-modal').hide();
    $('#modal').hide();
});


// section menu hamburger dropdown
$(document).ready(function () {
    $('.hamburger-dropdown__drop').click(function () {
        $('.hamburger-dropdown__drop').not(this).children('.menu-open').removeClass('active');
        $(this).children('.menu-open').toggleClass("active");

        if ($(this).parent().is('.hamburger-dropdown__open')) {
            $(this).closest('.hamburger-dropdown').find('.hamburger-dropdown-content').slideUp();
            $(this).closest('.hamburger-dropdown').removeClass('hamburger-dropdown__open');
        } else {
            $('.hamburger-dropdown-content').slideUp();
            $('.hamburger-dropdown').removeClass('hamburger-dropdown__open');
            $(this).closest('.hamburger-dropdown').find('.hamburger-dropdown-content').slideDown();
            $(this).closest('.hamburger-dropdown').addClass('hamburger-dropdown__open');
        }
    });
});