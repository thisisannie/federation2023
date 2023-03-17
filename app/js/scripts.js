$(document).ready(function() {
	
	// menu submenu toggle
	// $('.nav-item.has-child').on('click', function () {
	// 	if($(this).hasClass('active')) {
	// 		$(this).removeClass('active');
	// 		$('#menu-underlay').removeClass('active');
	// 	} else {
	// 		$(this).addClass('active');
	// 		$('#menu-underlay').addClass('active');
	// 	}
	// });

	// menu mobile toggle
	$('#nav__mobile-toggle').on('click', function () {
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('#nav__click-out').removeClass('active');
			$('nav').removeClass('active');
		} else {
			$(this).addClass('active');
			$('#nav__click-out').addClass('active');
			$('nav').addClass('active');
		}
	});
	$('#nav__click-out').on('click', function () {
		$('#nav__mobile-toggle').removeClass('active');
		$('#nav__click-out').removeClass('active');
		$('nav').removeClass('active');
	});
});