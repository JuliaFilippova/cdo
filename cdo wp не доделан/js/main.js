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
// CLOSE WINDOW MODAL
$('.js-close-window').click(function (e) {
    e.preventDefault();
    
    $('.js-overlay-window').fadeOut();
});
// CLOSE OVERLAY MODAL
$(document).mouseup(function (e) {
    let popup = $('.js-overlay-window');

    if (e.target != popup[0] && popup.has(e.target).length === 0) {
        $('.js-overlay-window').fadeOut();
    }
});
// Маска ввода номера телефона (плагин maskedinput)
$(function($){
    $('[name="phone"]').mask("+7(999) 999-9999");
});
//VALIDATE FORM
const resetFormsErrors = () => {
    $('form span.error-input').each((i, el) => $(el).text(''));

    $('label.has-errors').removeClass('has-errors')
};
const validateForm = form => {
    const name  = $(form).find("input[name='name']"),
          phone = $(form).find("input[name='phone']"),
          email = $(form).find("input[name='email']"),
          text  = $(form).find("input[name='text']");

    if ($(name).val().length === 0) {
        $(name).siblings('span.error-input').text('Поле должно быть заполнено!');

        $(name).parent('label.form-input').addClass('has-errors')
    }
    if ($(text).val().length === 0) {
        $(text).siblings('span.error-input').text('Поле должно быть заполнено!');

        $(text).parent('label.form-input').addClass('has-errors')
    }
    if ($(email).val().length === 0) {
        $(email).siblings('span.error-input').text('Поле должно быть заполнено!');

        $(email).parent('label.form-input').addClass('has-errors')
    }
    if ($(phone).val().length === 0) {
        $(phone).siblings('span.error-input').text('Поле должно быть заполнено!');

        return $(phone).parent('label.form-input').addClass('has-errors')
    }
    if ($(phone).val().length < 16) {
        $(phone).parent('label.form-input').addClass('has-errors');

        return $(phone).siblings('span.error-input').text('Введите телефон полностью!');
    }
};
// form
$(document).ready(function () {
    $('#form, #popupForm').submit(function (e) {
        e.preventDefault();
        resetFormsErrors();
        const name  = $(this).find("input[name='name']"),
              phone = $(this).find("input[name='phone']"),
              email = $(this).find("input[name='email']");
              text  = $(this).find("input[name='text']");
        if (!name || !phone || !email || !text || $(name).val().trim().length === 0 || $(phone).val().length === 0) return validateForm(this);
        if ($(phone).val().length < 16) return validateForm(this);
        $.ajax({
            type: "POST",
            url:  "http://cdo-rostov.ru/wp-content/themes/cdo/mail/mail.php",
            data: $(this).serialize()
        }).done(() => {
            $(this).trigger('reset');
            $('.js-overlay-window-thank-you').fadeIn();
        });
        return false;
    });
});