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
	$page_title = "Drive Karma - Auckland Transport";
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
		$img_path . 'Drive_Karma_Mobile-732x1182.webp',
		$img_path . 'Drive_Karma_Desktop-1600x800.webp',
		$img_path . 'Drive_Karma-hero_Desktop_XL-2400x1200.webp',
		$page_title,
	);
?>
<section>
	<div class="container container-xxl container--case-study-copy">
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
				<p>Zero deaths on Auckland’s roads by 2050. To achieve this ambitious goal, we needed to create a behaviour change campaign showing the link between speed and other road users.</p>
				<p>Blood and gore simply don’t work. Viewers just switch off. But happiness is contagious, and this also applies to our driving.  Good drivers stick to the speed limit and spread positivity. In engaging content, we modeled the behaviour we want to see – calmer, safer driving.</p>
				<!-- <h5>The Solution</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam, doloribus quidem accusamus excepturi maiores consectetur perspiciatis quisquam incidunt odio.</p>
				<h5>Results</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam, doloribus quidem accusamus excepturi maiores consectetur perspiciatis quisquam incidunt odio.</p> -->
			</div>
		</div>
	</div>
</section>

<?php
	includeServiceSectionSlickHW(
		[
			[
				"title" => "TVC",
				"mobile" => $img_path . 'Drive-karma-video-Mobile.webp',
				"desktop" => $img_path . 'Drive-karma-video-XL-Desktop.webp',
				"mp4" => $video_path . '920x518_tvc_Karma.mp4',
			],
			[
				"title" => "Out of Home",
				"mobile" => $img_path . 'Drive-karma-OOH-Mobile.webp',
				"desktop" => $img_path . 'Drive-karma-OOH-XL-Desktop.webp',
				"mp4" => false,
			],
		]
	);
?>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
