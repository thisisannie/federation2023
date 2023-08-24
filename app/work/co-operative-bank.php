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
	$page_title = "Co-Operative Bank - Bank Better NZ";
	$page_description = "We set out to reposition The Cooperative Bank as a contemporary challenger with a brand strategy that encouraged New Zealanders to ‘Bank Better’";
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
	$video_path = HTML_ROOT . '/assets/videos/work/' . $page_data['slug'] . '/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Coop_Bank-hero_Mobile_v1.webp',
		$img_path . 'Coop_Bank-hero_Desktop.webp',
		$img_path . 'Coop_Bank-hero_Desktop_XL.webp',
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
        <p>The Co-operative Bank has a unique ownership structure. Because its customers own the bank, dividends are shared among them. But this, and other selling points, are still largely unknown. In a competitive banking market, the big 4 shout much louder.</p>
        <h5>Solution</h5>
        <p>We set out to reposition The Cooperative Bank as a contemporary challenger with a brand strategy that encouraged New Zealanders to ‘Bank Better’. And we launched it with the simple observation that ‘Banking in New Zealand is a bit upside down.’</p>
        <h5>Success</h5>
        <p>The distinctive ‘upside down’ campaign has started a conversation with New Zealanders, prompting them to reassess how they bank, and who they bank with.</p> 

			</div>
		</div>
	</div>
</section>

<div class="services">
  <section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="text-graphic" style="background-color: #f5f1cc;">
					<div class="stat-number" style="color:#2eb45d;">46%</div>
					<div class="stat d-none d-md-block" style="color:#2eb45d;">Lorem ipsum dolor sit amet consectetur adipisicing elit</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSectionVideo(
			"TVC",
			$video_path . "920x518_COOP_launch_45_tvc_v1.mp4",
			$img_path . "Coop-video-XL.webp",
		);
		includeServiceSection(
			"Billboard",
			"Billboard",
			$img_path . "Coop-billboard-mobile.webp",
			$img_path . "Coop-billboard.webp",
			$img_path . "Coop-billboard-XL.webp",
		);
	?>
</div>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
