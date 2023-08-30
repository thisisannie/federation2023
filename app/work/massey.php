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
	$page_title = "Massey - Success from a thousand little moments";
	$page_description = "From the rich consumer insights and behavioural data we harness, to the creation of a compelling brand narrative.";
	$styles = [
		'work__detail.css',
	];
	// $scripts = [
	// 	'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js',
	// ];
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
		$img_path . 'Massey-hero_Mobile.webp',
		$img_path . 'Massey-hero_Desktop.webp',
		$img_path . 'Massey-hero_Desktop_XL.webp',
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
				<h5>Challenge</h5>
				<p>In a highly competitive market, local and international universities found themselves fighting over the same students. But from a marketing point of view, it was all a sea of same-ness. Research showed that Massey had the second to lowest conversion from consideration preference across all universities. With a much smaller share of voice, Massey needed to do things differently.</p>
				<h5>Solution</h5>
				<p>The tertiary sector is rife with images of students gazing misty-eyed into the future. But the truth is that student life can be difficult and even overwhelming. We embraced the irrefutable fact that only mahi gets results. Success comes from a thousand crazy, exhausting, exhilarating moments. In a visually distinctive way, and with a whole lot of personality, we brought to life one student insight after another, showing how Massey walks beside their students to help them succeed.</p>
				<h5>Results</h5>
				<p>While the competition waved their cheque books, we increased awareness and conversion on a small budget. Our new platform worked its socks off. Massey went from the number five spot to the most preferred University in New Zealand, in just three months. Job done.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">
	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="text-graphic text-graphic--row" style="background-color:#ed008c;">
					<div class="stat-number">#1</div>
					<div class="stat d-none d-md-block">Massey went from the number five spot to the most preferred university in New Zealand, in just three months.</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Massey went from the number five spot to the most preferred university in New Zealand, in just three months.</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSection(
			"Billboard",
			"Billboard",
			$img_path . "Massey-Billboard-mobile.webp",
			$img_path . "Massey-Billboard.webp",
			$img_path . "Massey-Billboard_XL.webp",
		);
		includeServiceSection(
			"OOH",
			"Out of home",
			$img_path . "Massey-OOH-mobile.webp",
			$img_path . "Massey-OOH.webp",
			$img_path . "Massey-OOH_XL.webp",
		);
		includeServiceSection(
			"Bus Decal",
			"Massey University bus decal",
			$img_path . "Massey-BusBack-mobile-v2.webp",
			$img_path . "Massey-BusBack-v2.webp",
			$img_path . "Massey-BusBack_XL-v2.webp",
		);
	?>
</div>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
