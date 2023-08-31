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
	$page_title = "KiwiRail";
	$page_description = "Moral priming is a key component of behaviour change. We’re much more likely to do the right thing if we think someone is watching.";
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
		$img_path . 'Kiwirail-hero_Mobile.webp',
		$img_path . 'Kiwirail-hero_Desktop.webp',
		$img_path . 'Kiwirail-hero_Desktop_XL.webp',
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
        <p>Kiwis are complacent around railway tracks. While our phones are busy dinging and distracting us, our attention spans are getting shorter and shorter. We’ve become a glancing society. With near misses on the rise, KiwiRail needed to introduce real behaviour change – to convince Kiwis to see trains, not just look.</p>
        <h5>Solution</h5>
        <p>Moral priming is a key component of behaviour change. We’re much more likely to do the right thing if we think someone is watching. So, we introduced Steely Stan, an imposing horse-bound commuter who appears at rail crossings, offering serious swagger and sage advice. And when Steely’s watching, you’d be foolish not to do the right thing.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">
<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				
				<?php /* Mobile only */ ?>
				<div class="text-graphic d-md-none" style="background-color: #fc503c; background-image:url(<?=$img_path?>Kiwirail-Call-out-mobile.webp); background-size: cover;">
					<!-- <div class="stat-number" style="color: #f1eea7">#1</div> -->
					<h4 class="d-md-none" style="color: #f1eea7">It’s exciting to have a partner with the deep expertise, innovation and commitment of Federation.”<br>
					<span style="font-weight: 700;">Megan Drayton - KiwiRail</span></h4>
				</div>

				<?php /* Desktop only */ ?>
				<div class="text-graphic d-none d-md-flex" style="background-color: #fc503c; background-image:url(<?=$img_path?>Kiwirail-Call-out-XL.webp); background-size: cover;">
					<!-- <div class="stat-number" style="color: #f1eea7">#1</div> -->
					<div class="stat" style="color: #f1eea7">It’s exciting to have a partner with the deep expertise, innovation and commitment of Federation.”<br>
					<span style="font-weight: 700;">Megan Drayton - KiwiRail</span></div>
				</div>
			</div>
			<!-- <div class="service__text">
				<h4 class="d-md-none">It’s exciting to have a partner with the deep expertise, innovation and commitment of Federation.” Megan Drayton - KiwiRail</h4>
			</div> -->
		</div>
	</section>

	<?php
		includeServiceSectionVideo(
			"Video",
			$video_path . "920x518_Kiwirail_tvc.mp4",
			$img_path . "Kiwirail-video-XL.webp",
		);
		includeServiceSection(
			"OOH",
			"OOH",
			$img_path . "Kiwirail-OOH-mobile.webp",
			$img_path . "Kiwirail-OOH.webp",
			$img_path . "Kiwirail-OOH-XL.webp",
		);
	?>
</div>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
