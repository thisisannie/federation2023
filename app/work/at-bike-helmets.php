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
	function includeServiceSectionSlickHW($cards) {
		include(ABSPATH . '/partials/service-section--slick-hw.php');
	}

	// Data
	$page_title = "Bike Helmets - Auckland Transport";
	$page_description = "";
	$styles = [
		'work__detail.css',
		'slick.css',
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
		srcset="<?=HTML_ROOT?>/assets/images/work/dxl.webp 2400w,
		<?=HTML_ROOT?>/assets/images/work/d.webp 1600w,
		<?=HTML_ROOT?>/assets/images/work/m.webp 732w"
		sizes="calc(100vw - 1.5rem)"
		src="<?=HTML_ROOT?>/assets/images/work/dxl.webp"
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
				<h5>The Challenge</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam, doloribus quidem accusamus excepturi maiores consectetur perspiciatis quisquam incidunt odio.</p>
				<h5>The Solution</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam, doloribus quidem accusamus excepturi maiores consectetur perspiciatis quisquam incidunt odio.</p>
				<h5>Results</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam, doloribus quidem accusamus excepturi maiores consectetur perspiciatis quisquam incidunt odio.</p>
			</div>
		</div>
	</div>
</section>

<?php

	includeServiceSectionSlickHW(
		[
			[
				"title" => "Title 1",
				"mobile" => HTML_ROOT . '/assets/images/work/m.webp',
				"desktop" => HTML_ROOT . '/assets/images/work/d.webp',
			],
			[
				"title" => "Title 1",
				"mobile" => HTML_ROOT . '/assets/images/work/m.webp',
				"desktop" => HTML_ROOT . '/assets/images/work/d.webp',
			],
		]
	);
?>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
