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
	$page_title = "NZ Opera - Macbeth";
	$page_description = "Using retargeting algorithms, our digital creative followed our audience around the internet, descending further and further into madness.";
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
	$video_path = HTML_ROOT . '/assets/videos/work/' . $page_data['slug'] . '/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Macbeth-hero_Mobile.webp',
		$img_path . 'Macbeth-hero_Desktop.webp',
		$img_path . 'Macbeth-hero_Desktop_XL.webp',
		$page_title,
	);
?>
<section>
	<div class="container container-xxl container--case-study-copy container--case-study-copy container--case-study-copy">
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
				<p>NZ Opera was at a crossroads. With an audience in its golden years, we needed to attract an entirely new group of theatre-goers to the opera and their new production of Macbeth. But how?</p>
				<h5>Solution</h5>
				<p>By following them wherever they go. After King Duncan’s murder, Macbeth’s paranoia becomes all-consuming. So we created the ‘paranoid campaign’ – one that accused the viewer of eavesdropping on it, and even staring at it. Using retargeting algorithms, our digital creative followed our audience around the internet, descending further and further into madness.</p>
				<p>We also created provocative OOH outside selected McDonald’s and Burger King restaurants urging diners to come and meet the real King.</p>
				<h5>Success</h5>
				<p>Feisty and attitudinal, yes.  Definitely not old school. Our campaign resulted in record engagement, and our “McDonald’s” and “Burger King” ambush drove earned media across the globe.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="text-graphic" style="background-image:url(<?=$img_path?>Macbeth-Call-out-mobile.webp); background-size: cover;">
					<div class="stat-number">56%</div>
					<div class="stat d-none d-md-block">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, mollitia.</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, mollitia.</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSection(
			"Billboard",
			"Billboard",
			$img_path . "Macbeth-Billboard-mobile.webp",
			$img_path . "Macbeth-Billboard.webp",
			$img_path . "Macbeth-Billboard-XL.webp",
		);
		includeServiceSectionVideo(
			"Social videos",
			$video_path . "1920x1080_macbeth_retarget mobile_short_v3.mp4",
			$img_path . "Macbeth-Social-XL.webp",
		);
		includeServiceSection(
			"OOH",
			"Out of home",
			$img_path . "Macbeth-OOH-mobile.webp",
			$img_path . "Macbeth-OOH.webp",
			$img_path . "Macbeth-OOH-XL.webp",
		);
		includeServiceSectionSlickV(
			"OOH BK/Maccas",
			[
				[
					"title" => "Murder a burger? How 'bout a king? - Macbeth - New Zealand Opera",
					"mobile" => $img_path . "Macbeth-carousel_Mobile-1.webp",
					"desktop" => $img_path . "Macbeth-Carousel-1.webp",
				],
				[
					"title" => "This Mac bites back - Macbeth - New Zealand Opera",
					"mobile" => $img_path . "Macbeth-carousel_Mobile-2.webp",
					"desktop" => $img_path . "Macbeth-Carousel-2.webp",
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
