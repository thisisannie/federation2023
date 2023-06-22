<?php 
  include '../config.php';

	// Functions
	function includeNextItem($slug, $company, $brief, $img, $gradient, $tags) {
		include(ABSPATH . '/partials/card__next.php');
	}
	function includeHeroImage($img_m, $img_d, $img_dxl, $page_title) {
		include(ABSPATH . '/partials/hero--image.php');
	}
	function includeServiceSection($title, $alt, $img_m, $img_d, $img_dxl) {
		include(ABSPATH . '/partials/service-section.php');
	}
	function includeServiceSectionVideo($title, $mp4, $poster) {
		include(ABSPATH . '/partials/service-section--video.php');
	}
	function includeServiceSectionSlickV($title, $cards) {
		include(ABSPATH . '/partials/service-section--slick-v.php');
	}
	function includeServiceSectionSlickH($title, $squared, $cards) {
		include(ABSPATH . '/partials/service-section--slick-h.php');
	}
	function includeServiceSectionSlickHW($cards) {
		include(ABSPATH . '/partials/service-section--slick-hw.php');
	}

	// Data
	$page_title = "Bike Helmets - Auckland Transport";
	$page_description = "";
	$styles = [
		'work__detail.css',
		'slick.css',
	];
	$scripts = [
		'slick.min.js',
	// 	'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js',
	];
	include ABSPATH . '/data/work.php';

	// Get this page data from data/work.php, based on current slug
	$url= $_SERVER['REQUEST_URI'];
	$slug_with_php = substr($url, strrpos($url, "/") + 1);
	$slug = preg_replace('/.php/', '', $slug_with_php);
	$page_data = $work[$slug];

	// Next work item data
	$keys = array_keys($work); 
	$index = array_search($page_data['slug'],$keys); 
	if (count($work) <= $index+1 ) { 
		$next_page_data = $work[$keys[0]]; 
	} else { 
		$next_page_data = $work[$keys[$index+1]]; 
	}

	$img_path = HTML_ROOT . '/assets/images/work/' . $page_data['slug'] . '/';
	$video_path = HTML_ROOT . '/assets/videos/work/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		HTML_ROOT . '/assets/images/placeholders/m.webp',
		HTML_ROOT . '/assets/images/placeholders/d.webp',
		HTML_ROOT . '/assets/images/placeholders/dxl.webp',
		$page_title,
	);
?>
<section>
	<div class="container container-xxl">
		<div class="row">
			<h1 class="h1--work maintain-margin"><?=$page_data['company']?></h1>
		</div>
		<div class="row justify-content-center">
			<div class="col col-12 col-md-6">
				<h2><?=$page_data['brief']?></h2>
				<p class="maintain-margin"><strong>Services:</strong>
					<?php
						foreach($page_data['tags'] as $tag) {
							echo '<br>' . $tag;
						}
					?>
				</p>
			</div>
			<div class="col col-12 col-md-6">
				<h5>The Challenge</h5>
				<p>How do you get more Aucklanders out on bikes? Like all behaviour change programs, it’s easier said than done. We knew that true bike enthusiasts were already pedalling up a storm, so our strategy focused on the next-most-likely audience – casual cyclists. And many of their bikes were just gathering dust in the back of the shed. </p>
				<h5>The Solution</h5>
				<p>We gave this group a potent and compelling reason to dust off their bikes - ‘point-to-point journeys’. We combined something they loved, such as a trip to their local ice cream shop, with cycling. In doing so, we were able to re-introduce the joy and convenience of cycling to a behaviour they were already receptive to.</p> 
				<p>Local café? Cycle there. Saturday sports? Bike there. Mates BBQ? Pedal instead. Bright, bold, striking imagery helped re-enforce the feeling of fun and ease.</p>
				<h5>Results</h5>
				<p>By combining the familiar, we were able to increase short journeys (under 2kms) around Auckland by 23%*. Which equates to about 15,000kms per week. Many of them not even in lycra. </p>
			</div>
		</div>
	</div>
</section>

<?php
	includeServiceSectionSlickHW(
		[
			[
				"title" => "Title 1",
				"mobile" => HTML_ROOT . '/assets/images/placeholders/m.webp',
				"desktop" => HTML_ROOT . '/assets/images/placeholders/d.webp',
			],
			[
				"title" => "Title 1",
				"mobile" => HTML_ROOT . '/assets/images/placeholders/m.webp',
				"desktop" => HTML_ROOT . '/assets/images/placeholders/d.webp',
			],
		]
	);
?>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
