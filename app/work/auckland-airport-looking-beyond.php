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
	$page_title = "Looking Beyond - Auckland Airport";
	$page_description = "";
	$styles = [
		'work__detail.css',
		'slick.css'
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
		$img_path . 'Auckland-Airport-Hero-mobile.webp',
		$img_path . 'Auckland-Airport-Hero.webp',
		$img_path . 'Auckland-Airport-hero-dxl.webp',
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
				<h5>Challenge</h5>
				<p>Auckland International Airport is on a journey – to create an airport experience to rival the world’s best. But right now, all New Zealanders can see is orange cones, roadworks and hi vis vests.</p>
				<h5>Solution</h5>
				<p>While work is underway, AIA want customers to enjoy smooth, stress-free journeys. Our new ‘Looking Beyond’ brand platform enables us to share important updates and good news stories in a positive fashion. And nip any negativity in the bud.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="text-graphic text-graphic--row" style="background-color:#2d3494;">
					<div class="stat-number">#1</div>
					<div class="stat d-none d-md-block">Lorem ipsum dolor sit amet consectetur.</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Lorem ipsum dolor sit amet consectetur.</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSection(
			"Billboard",
			"Billboard",
			$img_path . "Auckland-Airport-OOH-mobile.webp",
			$img_path . "Auckland-Airport-OOH.webp",
			$img_path . "Auckland-Airport-OOH-dxl.webp",
		);
		includeServiceSection(
			"Hoarding",
			"Hoarding",
			$img_path . "Auckland-Airport-Hoarding-mobile.webp",
			$img_path . "Auckland-Airport-Hoarding.webp",
			$img_path . "Auckland-Airport-Hoarding-dxl.webp",
		);
		includeServiceSectionVideo(
			"TVC",
			$video_path . "AIA_Disruptions_920x518.mp4",
			$img_path . "Auckland-Airport-TVC-dxl.webp",
		);
	?>

<!-- END .services -->
</div> 

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
