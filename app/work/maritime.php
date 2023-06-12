<?php 
  include '../config.php';

	// Functions
	function includeNextItem($slug, $company, $brief, $img, $gradient, $tags) {
		include(ABSPATH . '/partials/card__next.php');
	}
	function includeServiceSection($title, $alt, $img_m, $img_d, $img_dxl) {
		include(ABSPATH . '/partials/service-section.php');
	}
	function includeServiceSectionVideo($title, $mp4, $poster) {
		include(ABSPATH . '/partials/service-section--video.php');
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
	// $video_path = HTML_ROOT . '/assets/videos/work/' . $page_data['slug'] . '/';

	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<img 
		srcset="<?=$img_path;?>Kia-Mataara-hero-dxl.webp 2400w,
		<?=$img_path;?>banner-1600x800.webp 1600w,
		<?=$img_path;?>Kia-Mataara-hero-mobile.webp 732w"
		sizes="calc(100vw - 1.5rem)"
		src="<?=$img_path;?>banner-1600x800.webp"
		alt="Kia Mataara - Maritime New Zealand"
		title="Kia Mataara - Maritime New Zealand"
		class="feature-img"
	>
</div>
<section>
	<div class="container container-xxl">
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
				<p>While the competition waved their chequebooks, we increased awareness and conversion on a small budget. Our new platform worked its socks off. Massey went from the number five spot to the most preferred University in New Zealand, in just three months. Job done.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="graphic massey-stat" style="background-color:#f28503;">
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
		includeServiceSectionVideo(
			"TVC",
			HTML_ROOT . "/assets/videos/920x518_2023_v3.mp4",
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
		includeServiceSection(
			"Social",
			"Kia Mataara Social",
			$img_path . "Kia-Mataara-Social-mobile.webp",
			$img_path . "Kia-Mataara-Social.webp",
			$img_path . "Kia-Mataara-Social-dxl.webp",
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
