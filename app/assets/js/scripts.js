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
		}, 2100);
	
		const expandHeroHome = function () {
			$('#hero--home').addClass('tall wide');
			$('#h1--home').addClass('show');
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

	// Slick Carousels
	if ($('#slick__work').length) {
		$('#slick__work').slick({
			infinite: true,
			prevArrow: $('.slick-work-prev'),
			nextArrow: $('.slick-work-next'),
			slidesToShow: 2.3,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1.3,
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 1.6,
					}
				}
			]
		});
	}

	if ($('#slick__testimonials').length) {
		$('#slick__testimonials').slick({
			infinite: true,
			slidesToShow: 1,
			speed: 300,
			fade: true,
			cssEase: 'ease',
			prevArrow: $('.slick-testimonial-prev'),
			nextArrow: $('.slick-testimonial-next'),
		});
	}

	if ($('#slick__pill_hw').length) {
		$('#slick__pill_hw').slick({
			infinite: true,
			slidesToShow: 1,
			speed: 300,
			cssEase: 'ease',
			prevArrow: $('.slick-pill-hw-prev'),
			nextArrow: $('.slick-pill-hw-next'),
			adaptiveHeight: true,
		});
	}
	if ($('#slick__pill_h').length) {
		$('#slick__pill_h').slick({
			infinite: true,
			slidesToShow: 1.5,
			speed: 300,
			rtl: true,
			cssEase: 'ease',
			prevArrow: $('.slick-pill-h-prev'),
			nextArrow: $('.slick-pill-h-next'),
			slidesToShow: 1.5,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1.1,
						rtl: false,
						nextArrow: $('.slick-pill-h-prev'),
					}
				}
			]
		});

		// Change direction based on size
		if (window.innerWidth < 768) {
			$('#slick__pill_h').attr('dir','');
		}
		$(window).on("resize", function() {
			if (window.innerWidth < 768) {
				$('#slick__pill_h').attr('dir','');
			} else {
				$('#slick__pill_h').attr('dir','rtl');
			}
		});

	}
	if ($('#slick__pill_v').length) {
		$('#slick__pill_v').slick({
			infinite: true,
			slidesToShow: 1.5,
			speed: 300,
			rtl: true,
			cssEase: 'ease',
			prevArrow: $('.slick-pill-v-prev'),
			nextArrow: $('.slick-pill-v-next'),
		});
	}

	// Modal for video
	if ($('.modal-video-container').length) {
		$('.modal-video-container').each(function(){
			const modalVideoContainer = this;
			const video = modalVideoContainer.getElementsByClassName('modal-video')[0];
			const playButton =  modalVideoContainer.getElementsByClassName('button--play')[0];
			const exit = modalVideoContainer.getElementsByClassName('button--exit')[0];

			function removeControls() {
				video.removeAttribute("controls");
			}

			$(playButton).on('click', function () {

				// Scroll to top of video
				$([document.documentElement, document.body]).animate({
					scrollTop: $(video).offset().top
				}, 300);

				// Hide play button while playing, show when paused
				$(this).addClass('hidden');
				$(video)[0].play();
				video.onplay = function() {
					playButton.classList.add('hidden');
					video.classList.add('playing');
					modalVideoContainer.classList.add('active');
				};

				video.onpause = function() {
					playButton.classList.remove('hidden');
					video.classList.remove('playing');
				};

				// Show controls after started playing, remove once video ends
				video.setAttribute("controls","controls");
				video.addEventListener('ended',removeControls,false);
			});
			
			exitVideo = function() {
				modalVideoContainer.classList.remove('active');
				$(video)[0].load();

				playButton.classList.remove('hidden');
				video.classList.remove('playing');
				removeControls();
				console.log('exit video')
			};

			// Close modal and pause video on exit button click
			$(exit).on('click', exitVideo);
			$('.prev').on('click', exitVideo);
			$('.next').on('click', exitVideo);
		});
	}

	// Modal for People Bio
	if ($('.modal-bio').length && $('#people-cards').length) {
		$('.modal-bio').removeClass('d-none')
		let slug = '';
		let modal = '';
		let scrollY = 0;
		$('#people-cards').find('.card').on('click', function() {
			slug = $(this).data('slug');
			modal = '#modal-' + slug;
			scrollY = window.pageYOffset;
			$(modal).addClass('active');
			let modalHeight = $(modal).height();
			$(modal).css('height', modalHeight);

			// Prevent body scrolling, allow time for modal opacity animation
			document.body.style.overflowY = 'hidden';
			setTimeout(function () {
				document.body.style.position = 'fixed';
			}, 300);
		});
		
		$('.button.button--exit').on('click', function(){
			document.body.style.position = 'initial';

			// Return to body scroll position
			window.scrollTo(0, parseInt(scrollY || '0'));
			document.body.style.overflowY = 'auto';
			$('.modal-bio').removeClass('active');
		});
	}

	if ($('.accordion').length) {
		$('.accordion .title').on('click', function (){
			let that = $(this);
			if($(that).parent().hasClass('active')) {
				$(that).parent().removeClass('active')
			} else {
				$('.accordion .item').removeClass('active');
				setTimeout(function () {
					$(that).parent().addClass('active');
				}, 300);
			}
		})
	}

	// Add .active to current page header nav item

	const currentUrl = window.location.pathname;
	$('a[href~="'+currentUrl+'"]', 'header').addClass('active');

});