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
			</div>
			<div class="col col-12 col-md-6">
				<h5>Challenge</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rem dicta tenetur excepturi! Incidunt expedita repellendus nemo repudiandae illum commodi, dolorem corporis, minima laborum quia blanditiis, ad earum ipsa consectetur.</p>
				<h5>Solution</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rem dicta tenetur excepturi! Incidunt expedita repellendus nemo repudiandae illum commodi, dolorem corporis, minima laborum quia blanditiis, ad earum ipsa consectetur.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
			<div class="graphic massey-stat" style="background-color:#dbe555;">
					<div class="stat-number">#1</div>
					<div class="stat d-none d-md-block">Lorem, ipsum dolor sit amet consectetur adipisicing.</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, mollitia.</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSection(
			"Brand Guidelines",
			"Brand Guidelines",
			$img_path . "Eke-Panuku-Brand-guidelines-mobile.webp",
			$img_path . "Eke-Panuku-Brand-guidelines.webp",
			$img_path . "Eke-Panuku-Brand-guidelines-XL.webp",
		);
		includeServiceSection(
			"Website",
			"Eke Panuku Website",
			$img_path . "Eke-Panuku-Webpage-mobile.webp",
			$img_path . "Eke-Panuku-Webpage.webp",
			$img_path . "Eke-Panuku-Webpage-XL.webp",
		);
		includeServiceSectionSlickH(
			"Lorem Ipsum",
			true,
			[
				[
					"title" => "Eke Panuku Homepage screenshot",
					"mobile" => $img_path . "carousel/Eke-Panuku-carousel-1-mobile.webp",
					"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-1.webp",
				],
				[
					"title" => "Eke Panuku Key Manukau projects and events screenshot",
					"mobile" => $img_path . "carousel/Eke-Panuku-carousel-2-mobile.webp",
					"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-2.webp",
				],
				[
					"title" => "Eke Panuku Select your neighbourhood screenshot",
					"mobile" => $img_path . "carousel/Eke-Panuku-carousel-3-mobile.webp",
					"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-3.webp",
				],
				[
					"title" => "Eke Panuku Community hub screenshot",
					"mobile" => $img_path . "carousel/Eke-Panuku-carousel-4-mobile.webp",
					"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-4.webp",
				],
				[
					"title" => "Eke Panuku Project milestones screenshot",
					"mobile" => $img_path . "carousel/Eke-Panuku-carousel-5-mobile.webp",
					"desktop" => $img_path . "carousel/Eke-Panuku-Carousel-5.webp",
				],
			]
		);
	?>

<!-- END .services -->
</div> 

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
