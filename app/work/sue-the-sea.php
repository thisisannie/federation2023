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
	$page_title = "Sustainable Business Network - Sue the Sea";
	$page_description = "The planet can always use more allies.
  To celebrate 20 years of SBN helping businesses and the environment prosper, we created an entertaining satire.";
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
	$video_path = HTML_ROOT . '/assets/videos/work/' . $page_data['slug'] . '/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Sue_the_Sea-hero_Mobile-732x1182.webp',
		$img_path . 'Sue_the_Sea-hero_Desktop-1600x800.webp',
		$img_path . 'Sue_the_Sea-hero_Desktop_XL-2400x1200.webp',
		$page_title,
	);
?>
<section>
	<div class="container container-xxl container--case-study-copy container--case-study-copy">
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
				<p>The planet can always use more allies.<br>
        To celebrate 20 years of SBN helping businesses and the environment prosper, we created an entertaining satire. By blaming the climate for climate change, we made a powerful point. Good intentions don’t cut it – positive change only comes from the right&nbsp;plan.</p>
			</div>
		</div>
	</div>
</section>

<?php
	includeServiceSectionSlickHW(
		[
			[
				"title" => "Video",
				"mobile" => $img_path . 'Sue_the_Sea-video-mobile.webp',
				"desktop" => $img_path . 'Sue_the_Sea-video-XL-Desktop.webp',
				"mp4" => $video_path . '920x518_Suethesea_vid.mp4',
			],
		]
	);
?>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
