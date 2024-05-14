$(document).ready(function() {
	$('.masked__phone').mask('+7 (999) 999-99-99');
})
$(document).on('click', '.burger', function() {
	var body = $('body');
	if($(this).hasClass('open')) {
		$(this).removeClass('open');
		body.removeClass('overflow-hidden');
	} else {
		$(this).addClass('open');
		body.addClass('overflow-hidden');
	}
})
$(document).on('click', '.close', function() {
	$('.burger').trigger('click');
})
$(document).on('click', '.button__header', function() {
	$('body').find('.' + $(this).attr('data-modal')).addClass('open');
})