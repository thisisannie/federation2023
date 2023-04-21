<?php 
	function includeWorkItem() {
		include('partials/card__work.php');
	}
	function includeTestimonial() {
		include('partials/testimonial.php');
	}
	$page_title = "Provocative advertising";
	$page_description = "We’re Federation, an advertising agency creating provocative ideas that live within advertising, entertainment and technology.";
	$styles = [
		'slick.css',
	];
	$scripts = [
		'slick.min.js',
	];
	$work = [
		"maratime-nz",
		"massey",
		"nz-opera",
		"mission-electric",
	];
	$testimonial = [
		"one",
		"two",
	];
  include 'config.php';
	include ABSPATH . '/partials/header.php';
?>
<div id="hero--home" class="hero hero--home">
		<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.webm" type="video/webm"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.mp4" type="video/mp4"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.ogv" type="video/ogg"></video>
		<span id="what1" class="what h1 d-none d-md-inline-block">What does success</span>
		<span id="what2" class="what h1 d-none d-md-inline-block">look like to you?</span>
</div>
<div class="container">
</div>
<section>
	<div class="container container-wide">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1 class="d-md-none">What does success look like to you?</h1>
				<p>We’re Federation, an advertising agency for the new age. We&nbsp;create provocative ideas that live within advertising, entertainment and technology.</p>
				<a href="#" class="button">About us</a>
			</div>
		</div>	
	</div>
</section>

<section>
	<div class="finger finger--slick-work align-items-center">
		<div class="finger__text">
			<h2>Our work</h2>
			<a href="" class="button button--spot prev slick-work-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
			<a href="" class="button button--spot next slick-work-next"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
			<span class="our-work-button-spacer"></span>
			<a href="#" class="button button--reverse">See all work <img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/arrow-right.svg" alt=">"></a>
		</div>
		<div class="finger__image">
			<div id="slick__work" class="cards">
				<!-- Work Cards -->
				<?php
					foreach ($work as $item) {
						includeWorkItem();
					}
				?>
			</div>
		</div>
	</div>
</section>

<section>
	<div id="slick__testimonials" class="">
		<!-- Testimonials -->
		<?php
			foreach ($testimonial as $item) {
				includeTestimonial();
			}
		?>	
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>
