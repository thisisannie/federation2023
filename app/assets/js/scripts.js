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

	// Hero Home Animaiton
	if($('#hero--home').length > 0) {
		setTimeout(function () {
			$('#hero--home').addClass('tall');
			console.log('taller');
		}, 100);
	
		const expandHeroHome = function () {
			$('#hero--home').addClass('tall wide');
			if ($(window).scrollTop() < 500) {
				$([document.documentElement, document.body]).animate({
					scrollTop: $("#hero--home").offset().top-30
			}, 300);
			}
		}
		$(window).one("scroll", expandHeroHome );
	}

	// Replace all SVG images (class svg) with inline SVG for css editability
	$('img.svg').each(function(){
		var $img = $(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		$.get(imgURL, function(data) {
				// Get the SVG tag, ignore the rest
				var $svg = $(data).find('svg');

				// Add replaced image's ID to the new SVG
				if(typeof imgID !== 'undefined') {
						$svg = $svg.attr('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if(typeof imgClass !== 'undefined') {
						$svg = $svg.attr('class', imgClass+' replaced-svg');
				}

				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');

				// Replace image with new SVG
				$img.replaceWith($svg);

		}, 'xml');

});
});