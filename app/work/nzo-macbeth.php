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
	function includeServiceSectionSlickV($title, $cards) {
		include(ABSPATH . '/partials/service-section--slick-v.php');
	}

	// Data
	$page_title = "NZ Opera - Macbeth";
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
<div class="hero">
	<img 
		srcset="<?=$img_path?>Macbeth-hero_Desktop_XL.webp 2400w,
		<?=$img_path?>Macbeth-hero_Desktop.webp 1600w,
		<?=$img_path?>Macbeth-hero_Mobile.webp 732w"
		sizes="calc(100vw - 1.5rem)"
		src="<?=$img_path?>Macbeth-hero_Desktop_XL.webp"
		alt="<?=$page_title;?>"
		title="<?=$page_title;?>"
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
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rem dicta tenetur excepturi! Incidunt expedita repellendus nemo repudiandae illum commodi, dolorem corporis, minima laborum quia blanditiis, ad earum ipsa consectetur.</p>
				<h5>Solution</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rem dicta tenetur excepturi! Incidunt expedita repellendus nemo repudiandae illum commodi, dolorem corporis, minima laborum quia blanditiis, ad earum ipsa consectetur.</p>
			</div>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="graphic massey-stat" style="background-image:url(<?=$img_path?>Macbeth-Call-out-mobile.webp); background-size: cover;">
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
		// includeServiceSection(
		// 	"Test section",
		// 	"Test section",
		// 	HTML_ROOT . '/assets/images/work/m.webp',
		// 	HTML_ROOT . '/assets/images/work/d.webp',
		// 	HTML_ROOT . '/assets/images/work/dxl.webp',
		// );
		includeServiceSection(
			"Billboard",
			"Billboard",
			$img_path . "Macbeth-Billboard-mobile.webp",
			$img_path . "Macbeth-Billboard.webp",
			$img_path . "Macbeth-Billboard-XL.webp",
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
		includeServiceSection(
			"OOH",
			"Out of home",
			$img_path . "Macbeth-OOH-mobile.webp",
			$img_path . "Macbeth-OOH.webp",
			$img_path . "Macbeth-OOH-XL.webp",
		);
		includeServiceSectionVideo(
			"Social videos",
			HTML_ROOT . "/assets/videos/work/Macbeth_retarget_920x518.mp4",
			$img_path . "Macbeth-Social-XL.webp",
		);
	?>

<!-- END .services -->
</div> 

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>