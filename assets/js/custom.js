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