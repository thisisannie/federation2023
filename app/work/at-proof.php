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
	$page_title = "Proof of Delivery - Auckland Transport";
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
		$img_path . 'Proof_of_delivery-hero_Mobile.webp',
		$img_path . 'Proof_of_delivery-hero_Desktop.webp',
		$img_path . 'Proof_of_delivery_Desktop_XL.webp',
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
				<!-- <h5></h5> -->
				<p>To launch AT’s new ‘Let’s go there’ platform, we created a fully integrated campaign (including a soundtrack composed of the sounds of the city itself). This allowed us to  showcase the freedoms a fully connected city now offers Aucklanders – from safe cycling, walking, buses, trains to ferries.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">
	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="text-graphic text-graphic--row" style="background-color:#2d7caf;">
					<div class="stat-number">2.4</div>
					<div class="stat d-none d-md-block">million increase in Public Transport boardings (compared to 2020 target)</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">million increase in Public Transport boardings (compared to 2020 target)</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSection(
			"Out of Home",
			"Out of Home",
			$img_path . "POD-OOH-mobile-v2.webp",
			$img_path . "POD-OOH-desktop-v2.webp",
			$img_path . "POD-OOH-XL-desktop-v2.webp",
		);
		includeServiceSectionVideo(
			"TVC – First time tapper",
			$video_path . "920x518_video_first_time.mp4",
			$img_path . "POD-video-1-XL-desktop.webp",
		);
		includeServiceSectionVideo(
			"TVC – Upcycle",
			$video_path . "920x518_video_upcycle.mp4",
			$img_path . "POD-video-2-XL-desktop.webp",
		);
	?>
</div>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
