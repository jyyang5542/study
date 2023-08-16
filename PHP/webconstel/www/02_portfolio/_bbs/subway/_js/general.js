$(function() {
	$('.notice_close').click(function() {
		$('#notice').slideUp();
	});

	$('.menu a').mouseenter(function() {
		$('#submenu').stop().slideDown();
	});
	$('#header, #submenu').mouseleave(function() {
		$('#submenu').stop().slideUp();
	});
});