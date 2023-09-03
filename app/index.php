<?php 
  include './config.php';

	// Functions
	function includeWorkItem($slug, $company, $brief, $img_m, $img_d, $gradient, $tags) {
		include(ABSPATH . '/partials/card__work.php');
	}
	function includeTestimonial($quote, $name, $role, $company, $image_mobile, $image_desktop) {
		include(ABSPATH . '/partials/testimonial.php');
	}

	// Data
	$page_title = "Provocative advertising";
	$page_description = "We’re Federation, an advertising agency creating provocative ideas that live within advertising, entertainment and technology.";
	$styles = [
		'slick.css',
	];
	$scripts = [
		'slick.min.js',
	];
	include ABSPATH . '/data/work.php';
	include ABSPATH . '/data/testimonials.php';

	include ABSPATH . '/partials/header.php';
?>
<div id="hero--home" class="hero hero--home">
		<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_2023_Homepage_v4.mp4" type="video/mp4"></video>
		<span id="what1" class="what h1 d-none d-md-inline-block">What does success</span>
		<span id="what2" class="what h1 d-none d-md-inline-block">look like to you?</span>
</div>
<div class="container">
</div>
<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1 id="h1--home">What does success look like to you?</h1>
				<p>It’s a simple question, but it’s a powerful one. And it’s a question we ask every one of our clients. After all, if we don’t know where we’re heading, how can we hope to get you there?<br>
				Welcome to Federation, an independent advertising agency in Aotearoa, New Zealand.</p>
				<p>Let’s hunt down your success together.</p>
				<div class="gutter--xs"></div>
				<a href="<?=HTML_ROOT;?>/about" class="button">About us</a>
			</div>
		</div>	
	</div>
</section>

<section>
	<div class="finger finger--slick-work align-items-center">
		<div class="finger__text">
			<h2>Our work</h2>
			<div class="slick--controls">
				<a href="" class="button button--spot prev slick-work-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
				<a href="" class="button button--spot next slick-work-next"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
				<span class="our-work-button-spacer"></span>
				<a href="<?=HTML_ROOT;?>/work" class="button button--reverse">See all work <img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/arrow-right.svg" alt=">"></a>
			</div>
		</div>
		<div class="finger__image">
			<div id="slick__work" class="cards">
				<!-- Work Cards -->
				<?php
					// note: number of items must match css nth-child in slick.scss or animation will be jerky
					$four_work_items = array_slice($work, 0, 9); 
					foreach ($four_work_items as $item) {
						includeWorkItem($item["slug"], $item["company"], $item["brief"], $item["thumb_primary_m"], $item["thumb"], $item["gradient"], $item["tags"]);
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
			foreach ($testimonials as $item) {
				includeTestimonial($item["quote"], $item["name"], $item["role"], $item["company"], $item["image_mobile"], $item["image_desktop"]);
			}
		?>	
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>
