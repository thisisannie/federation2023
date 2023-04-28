<?php 
  include './config.php';

	// Functions
	function includeWorkItem($slug, $company, $brief, $img, $gradient, $tags) {
		include(ABSPATH . '/partials/card__work.php');
	}

	// Data
	$page_title = "Work Portfolio";
	$page_description = "From the rich consumer insights and behavioural data we harness, to the creation of a compelling brand narrative.";
	include ABSPATH . '/work__data.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<!-- <video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.webm" type="video/webm"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.mp4" type="video/mp4"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.ogv" type="video/ogg"></video> -->
	<img src="<?=HTML_ROOT;?>/assets/images/placeholders/video-placeholder.webp" alt="" class="feature-img">
</div>
<section>
	<div class="container container-wide">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1>Our Work</h1>
				<p class="intro">Building brands, engaging people, making tills ring. Here are some of our most talked-about and effective advertising campaigns.</p>
				<div id="work-filters">
					<h5 class="filter-by">Filter by service:</h5>
					<a id="filter--brand" class="label">Brand</a>
					<a id="filter--social" class="label">Social</a>
					<a id="filter--creative" class="label">Creative</a>
					<a id="filter--website" class="label">Website</a>
					<a id="filter--strategy" class="label">Strategy</a>
				</div>
			</div>
		</div>
		<div id="work-cards" class="cards">
			<!-- Work Cards -->
			<?php
				foreach ($work as $item) {
					includeWorkItem($item["slug"], $item["company"], $item["brief"], $item["thumb"], $item["gradient"], $item["tags"]);
				}
			?>
		</div>
	</div>
</section>


<?php
	include ABSPATH . '/partials/footer.php';
?>
