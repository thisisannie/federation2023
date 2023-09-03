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
	$page_title = "Mission Electric - Auckland Transport";
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
	// $video_path = HTML_ROOT . '/assets/videos/work/' . $page_data['slug'] . '/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Mission-electric-hero_Mobile.webp',
		$img_path . 'Mission-electric-hero_Desktop.webp',
		$img_path . 'Mission-electric-hero_Desktop_XL.webp',
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
				<p>A climate emergency requires all hands-on deck. Committed to reducing their footprint by 85%, Auckland Transport began rolling out a fleet of low emission vehicles - goodbye dirty old diesel, hello planet-friendly electric and hydrogen. But despite significant investments to create a sustainable network, many Aucklanders remained oblivious.</p>
				<h5>Solution</h5>
				<p>Every mission needs a rallying cry. So, we created ‘Mission Electric’, a positive multi-year platform to promote Auckland Transport’s emissions reduction plan. Speaking directly to residents of the areas going electric, we even created a ‘transparent’ bus wrap to give Aucklanders a peek under the hood of the vehicle and the tech that powers it.</p>
				<h5>Success</h5>
				<p>AT reduced greenhouse gas emissions by approx. 11 % annually. And now Aucklanders actually know about this epic feat.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="text-graphic" style="background-image:url(<?=$img_path?>Mission-Electric-Call-out-mobile.webp); background-size: cover;">
					<div class="stat-number">11%</div>
					<div class="stat d-none d-md-block">Annual reduction in greenhouse gas emissions annually</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Annual reduction in greenhouse gas emissions annually</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSection(
			"OOH",
			"OOH",
			$img_path . "Mission-Electric-OOH-mobile.webp",
			$img_path . "Mission-Electric-OOH.webp",
			$img_path . "Mission-Electric-OOH-XL.webp",
		);
		includeServiceSection(
			"Bus Side Closeup",
			"Bus Side Closeup",
			$img_path . "Mission-Electric-closeUp-Mobile.webp",
			$img_path . "Mission-Electric-closeUp-desktop.webp",
			$img_path . "Mission-Electric-closeUp-XL-desktop.webp",
		);
		includeServiceSection(
			"Bus back",
			"Bus back",
			$img_path . "Mission-Electric-BusBack-mobile.webp",
			$img_path . "Mission-Electric-BusBack.webp",
			$img_path . "Mission-Electric-BusBack-XL.webp",
		);
	?>

<!-- END .services -->
</div> 

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
