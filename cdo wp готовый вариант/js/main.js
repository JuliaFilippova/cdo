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
//форма модальное окно
$('#btnForm').on('click',function() {
    $('.popup-form').toggle();
});
//close bg
$('.pum-theme-266').on('click',function() {
    console.log('нажали на фон чтобы закрыть');
    $('#pum-270').hide();
});
//close bg
$('.pum-close').on('click',function() {
    console.log('нажали на кнопку закрыть');
    $('#pum-270').hide();
});
// CLOSE WINDOW MODAL
$('.js-close-window').click(function (e) {
    e.preventDefault(); 
    $('.js-overlay-window').fadeOut();
    $('.popup-form').fadeOut();
});
// Маска ввода номера телефона (плагин maskedinput)
$(function($){
    $('[name="tlfn-1"]').mask("+7(999) 999-9999");
});

let popupForm = document.querySelector( '.popup-form' );

document.addEventListener( 'wpcf7mailsent', function( event ) {
	console.log('кликнули на кнопку и отправили');
	$('.popup-form').hide();
	console.log('закрыли форму после отправки');
	$('#pum-270').css({
	  'display':'block'
	});
    $('.pum-close').on('click',function() {
        console.log('нажали на кнопку закрыть');
        $('#pum-270').hide();
    });
	console.log('показали модалку спасибо');
}, false );
