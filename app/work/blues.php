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
	$page_title = "Blues - Paint it Blue";
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
		$img_path . 'Blues-hero_Mobile.webp',
		$img_path . 'Blues-hero_Desktop.webp',
		$img_path . 'Blues-hero_Desktop_XL.webp',
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
				<p>Heading into the 2021 season, The Blues wanted to inspire fan tribalism and fill Eden Park. But many Aucklanders are originally from somewhere else – they’re loyal to their own home teams. And how can you win over the one-eyed?</p>
				<h5>Solution</h5>
				<p>We set out to convert the unconvertible. Andrew ‘Mulls’ Mulligan – co-host of The Rock’s breakfast show and passionate Hurricanes supporter – was a sitter. In a high profile live radio promotion, we pranked Mulls on air, claiming that he now bled blue. His car was rebranded, he appeared on billboards wearing the team strip, and even his kids were decked out in personalised Blues merch.</p>
				<h5>Success</h5>
				<p>The campaign reached over 100K listeners on-air and over 300k via social media. Loyal Blues supporters were vocal, and even Blues players waded in to send Mulls personal text messages to celebrate the conversion.</p>
			</div>
		</div>
	</div>
</section>

	<?php
		includeServiceSectionSlickHW(
			[
				[
					"title" => "Case study",
					"mobile" => $img_path . 'Blues-lozenge_Mobile.webp',
					"desktop" => $img_path . 'Blues-lozenge_Desktop_XL.webp',
					"mp4" => $video_path . '920x518_video_Blues.mp4',
				],
			]
		);
	?>


<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
