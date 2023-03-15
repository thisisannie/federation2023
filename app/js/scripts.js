$(document).ready(function() {
	
	// menu submenu toggle
	$('.nav-item.has-child').on('click', function () {
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('#menu-underlay').removeClass('active');
		} else {
			$(this).addClass('active');
			$('#menu-underlay').addClass('active');
		}
	});
});