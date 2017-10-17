// javascript fucntions

jQuery(document).ready(function ($) {
	
	$('#menuexpand').click(function () {
		$('.burger').toggleClass('active');
		$('.menu-primary-container').toggleClass('active');
		$('#menuexpand p').toggleClass('active');
	});
	
});