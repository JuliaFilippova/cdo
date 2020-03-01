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

// Отправка заявки 
$(document).ready(function() {
    $('#form').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
        if (document.form.name.value == '' || document.form.phone.value == '' ) {
            valid = false;
            return valid;
        }
        $.ajax({
            type: "POST",
            url: "mail/mail.php",
            data: $(this).serialize()
        }).done(function() {
            $('.js-overlay-window-thank-you').fadeIn();
            $(this).find('input').val('');
            $('#form').trigger('reset');
        });
        return false;
    });
});

// CLOSE WINDOW MODAL
$('.js-close-window').click(function (e) {
    e.preventDefault();
    
    $('.js-overlay-window').fadeOut();
});
//CLOSE OVERLAY MODAL
$(document).mouseup(function (e) {
    let popup = $('.js-overlay-window');

    if (e.target != popup[0] && popup.has(e.target).length === 0) {
        $('.js-overlay-window').fadeOut();
    }
});

//hamburger
$('#btnForm').on('click',function() {
    $('.popup-form').toggle();
    $('#modal').toggle();
});
//close bg
$('#modal').on('click',function() {
    $('.popup-form').hide();
    $('#modal').hide();
});
//close bg
$('.js-close-window').on('click',function() {
    $('.popup-form').hide();
    $('#modal').hide();
});

// Маска ввода номера телефона (плагин maskedinput)
$(function($){
    $('[name="phone"]').mask("+7(999) 999-9999");
});