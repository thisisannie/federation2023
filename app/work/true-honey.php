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
	$page_title = "True Honey e-commerce";
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
		$img_path . 'THC-hero_Mobile.webp',
		$img_path . 'THC-hero_Desktop.webp',
		$img_path . 'THC-hero_Desktop_XL.webp',
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
				<a href="https://truehoney.co.nz/" class="button" target="_blank">Launch site</a>
			</div>
			<div class="col col-12 col-md-6">
				<h5>Challenge</h5>
				<p>The True Honey Co. produces some of the best Mānuka honey in the world, including the world’s highest rated Mānuka honey. We wanted to give The True Honey Co. the perfect vehicle in which to tell their story and make their product available to the world. We wanted to present them as a premium brand so it was clear as soon as you visit the site, you are buying something special.</p>
				<h5>Solution</h5>
				<p>We started from the ground up, assessing different e-commerce platforms and finding the most secure platform we could. Using Shopify as our starting point, we integrated this with The True Honey Co.’s existing warehousing and distribution platforms, as well as partnering the site with Ominisend, giving them, fully automated email communications. Once live, we ran a campaign through Social media, display and native to promote the new site and drive customer acquisition. With a smoother UX, we are seeing repeat visits and purchases made, along with an increase in new customers.</p>
				<h5>Results</h5>
				<p>+590% increase in site users from the same period in 2019</p>
				<p>$20,000 of sales in 3 months through the website</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				
				<?php /* Mobile only */ ?>
				<div class="text-graphic d-md-none" style="background-color: black; background-image:url(<?=$img_path?>THC-Call-out-mobile.webp); background-size: cover;">
					<div class="stat-number">+590%</div>
				</div>

				<?php /* Desktop only */ ?>
				<div class="text-graphic d-none d-md-flex" style="background-color: black; background-image:url(<?=$img_path?>THC-Call-out-XL.webp); background-size: cover;">
					<div class="stat-number">+590%</div>
					<div class="stat">increase in site users from the same period in 2019</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">increase in site users from the same period in 2019</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSection(
			"Website",
			"True Honey Website",
			$img_path . "THC-Website-mobile.webp",
			$img_path . "THC-Website.webp",
			$img_path . "THC-Website-XL.webp",
		);
		includeServiceSectionSlickH(
			"Website Pages",
			true,
			[
				[
					"title" => "True Honey Co. Homepage screenshot",
					"mobile" => $img_path . "carousel/THC-Carousel-1-mobile.webp",
					"desktop" => $img_path . "carousel/THC-Carousel-1.webp",
				],
				[
					"title" => "True Honey Co. Product page screenshot",
					"mobile" => $img_path . "carousel/THC-Carousel-2-mobile.webp",
					"desktop" => $img_path . "carousel/THC-Carousel-2.webp",
				],
				[
					"title" => "True Honey Co. Products screenshot",
					"mobile" => $img_path . "carousel/THC-Carousel-3-mobile.webp",
					"desktop" => $img_path . "carousel/THC-Carousel-3.webp",
				],
				[
					"title" => "True Honey Co. Products screenshot",
					"mobile" => $img_path . "carousel/THC-Carousel-4-mobile.webp",
					"desktop" => $img_path . "carousel/THC-Carousel-4.webp",
				],
				[
					"title" => "True Honey Co. Page screenshot",
					"mobile" => $img_path . "carousel/THC-Carousel-5-mobile.webp",
					"desktop" => $img_path . "carousel/THC-Carousel-5.webp",
				],
			]
		);
		includeServiceSection(
			"Magazine",
			"True Honey Magazine Article",
			$img_path . "THC-Magazine-mobile.webp",
			$img_path . "THC-Magazine.webp",
			$img_path . "THC-Magazine-XL.webp",
		);
	?>

<!-- END .services -->
</div> 

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
