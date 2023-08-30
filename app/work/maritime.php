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
	$page_title = "Kia Mataara | Maritime New Zealand";
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
	$video_path = HTML_ROOT . '/assets/videos/work/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Kia-Mataara-hero-mobile.webp',
		$img_path . 'Kia-Mataara-hero-desktop.webp',
		$img_path . 'Kia-Mataara-hero-dxl.webp',
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
				<p>New Zealanders have a symbiotic relationship with the water – it’s both our playground and our pantry. But we don’t always treat the water with the respect it deserves, particularly boaties aged 45+. They’re a notoriously stubborn bunch that refuse to be told what to do or wear. And this shows in the statistics.</p>
				<h5>Solution</h5>
				<p>In the first phase of our behaviour change platform, we created an ownable piece of language that encouraged respect for the ocean and reflected our culture.<br>
				Having created an emotional connection, we began to plant more specific advice.<br>
				To launch Safer Boating Week, and to highlight the place where the known becomes the unknown, we created a spectacular ‘human life-line’ activation at a popular launch spot.<br>
				Salty Sid, hero of the high seas, became the face of the Boaties Safety line. <br>
				His message? Cross this line without knowing the ways of the water, and your chances of returning home safe and sound are reduced.
				</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="text-graphic text-graphic--row" style="background-color:#f28503;">
					<div class="stat-number">39%</div>
					<div class="stat d-none d-md-block">Reduction in deaths (Despite a rise in recreational craft&nbsp;use)</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Reduction in deaths (Despite a rise in recreational craft&nbsp;use)</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSectionVideo(
			"TVC",
			HTML_ROOT . "/assets/videos/work/Maritime_TVC_saltyline_920x518.mp4",
			$img_path . "Kia-Mataara-TVC.webp",
		);
		includeServiceSection(
			"Billboard",
			"Billboard",
			$img_path . "Kia-Mataara-Billboard-mobile.webp",
			$img_path . "Kia-Mataara-Billboard.webp",
			$img_path . "Kia-Mataara-Billboard-dxl.webp",
		);
		includeServiceSection(
			"OOH",
			"Out of home",
			$img_path . "Kia-Mataara-OOH-mobile.webp",
			$img_path . "Kia-Mataara-OOH.webp",
			$img_path . "Kia-Mataara-OOH-dxl.webp",
		);
		includeServiceSectionVideo(
			"Social",
			$video_path . "Maritime_social_920x518.mp4",
			$img_path . "Kia-Mataara-Social.webp",
		);
		includeServiceSection(
			"Website",
			"Kia Mataara Webpages",
			$img_path . "Kia-Mataara-Webpages-mobile.webp",
			$img_path . "Kia-Mataara-Webpages.webp",
			$img_path . "Kia-Mataara-Webpages-dxl.webp",
		)
	?>

<!-- END .services -->
</div> 

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
