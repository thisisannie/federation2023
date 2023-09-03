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
	$page_title = "Eke Panuku Rebrand";
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
	// $video_path = HTML_ROOT . '/assets/videos/work/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Eke-Panuku-Case-study-hero_Mobile.webp',
		$img_path . 'Eke-Panuku-Case-study-hero_Desktop.webp',
		$img_path . 'Eke-Panuku-Case-study-hero_Desktop-XL.webp',
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
				<a href="https://www.ekepanuku.co.nz/" class="button" target="_blank">Launch site</a>
			</div>
			<div class="col col-12 col-md-6">
				<p>Rock stars of urban regeneration, Eke Panuku turns urban jungle into vibrant, harmonious spaces. We were tasked with exciting locals about completed developments, as well as attracting developers and investors to future projects.</p>
				<p>Our new creative platform, ‘Thrive’, allows us to discuss innovative projects at a city-wide level, as well as giving each suburb its own unique voice. Visually, our new designs added attitude and vibrancy to every touch point.</p>
			</div>
		</div>
	</div>
</section>


<?php
	includeServiceSectionSlickHW(
		[
			[
				"title" => "Brand Guidelines",
				"mobile" => $img_path . 'Eke-Panuku-Brand-guidelines-mobile.webp',
				"desktop" => $img_path . 'Eke-Panuku-Brand-guidelines-xl.webp',
				"mp4" => false,
			],
			[
				"title" => "Website",
				"mobile" => $img_path . 'EkePanuku-website-mobile',
				"desktop" => $img_path . 'Eke-Panuku-Webpage-XL.webp',
				"mp4" => false,
			],
		]
	);

	// includeServiceSectionSlickH(
	// 	"Website Pages",
	// 	true,
	// 	[
	// 		[
	// 			"title" => "Eke Panuku Homepage screenshot",
	// 			"mobile" => $img_path . "carousel/Eke-Panuku-carousel-1-mobile.webp",
	// 			"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-1.webp",
	// 		],
	// 		[
	// 			"title" => "Eke Panuku Key Manukau projects and events screenshot",
	// 			"mobile" => $img_path . "carousel/Eke-Panuku-carousel-2-mobile.webp",
	// 			"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-2.webp",
	// 		],
	// 		[
	// 			"title" => "Eke Panuku Select your neighbourhood screenshot",
	// 			"mobile" => $img_path . "carousel/Eke-Panuku-carousel-3-mobile.webp",
	// 			"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-3.webp",
	// 		],
	// 		[
	// 			"title" => "Eke Panuku Community hub screenshot",
	// 			"mobile" => $img_path . "carousel/Eke-Panuku-carousel-4-mobile.webp",
	// 			"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-4.webp",
	// 		],
	// 		[
	// 			"title" => "Eke Panuku Project milestones screenshot",
	// 			"mobile" => $img_path . "carousel/Eke-Panuku-carousel-5-mobile.webp",
	// 			"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-5.webp",
	// 		],
	// 	]
	// );
?>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
