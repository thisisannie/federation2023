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
	$page_title = "Easy Fleasy - Bayer";
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
	$video_path = HTML_ROOT . '/assets/videos/work/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Fleasy_peasy-hero_Mobile-732x1182.webp',
		$img_path . 'Fleasy_peasy-hero_Desktop-1600x800.webp',
		$img_path . 'Fleasy_peasy-hero_Desktop_XL-2400x1200.webp',
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
				<p>Elanco Animal Health (formerly Bayer) has unveiled a brand new, integrated campaign for its market-leading flea treatment for cats and dogs, Seresto. Working with independent creative agency Federation, the campaign leverages a key research insight that spotlights just how tricky it is for pet owners to navigate the maze of flea treatments within the category.</p> 
				<p>Using cats and dogs that effortlessly perform seemingly impossible balancing acts without as much as a twitch of their tail, the campaign launches with two new TV commercials that demonstrate how easy it is to use Seresto’s 8 month matrix technology collar to control fleas. In fact, it’s so easy, it’s fleasy-peasy! The campaign strategy integrates vet clinic and pet store support across the country.</p> 
				<p>Richard Wilson, Sales and Marketing Manager, Elanco Animal Health says that “Federation’s experience and passion in the category was key to their appointment to Seresto and through their strategy and creative ideation process, they’ve demonstrated real capability to harness market and customer insight with strategy and creativity.”</p> 
				<p>Federation’s Managing Partner, Elizabeth Beatty, says, “Richard and Gina are passionate clients and collectively we’re very ambitious to achieve real market share growth for Seresto over the coming year. With COVID impacting our lives so profoundly, animals have become even more important to Kiwis, so Federation was thrilled to be charged with the task of helping to keep our country’s pets happy and healthy while driving sales.”
</p>
			</div>
		</div>
	</div>
</section>

<?php
	includeServiceSectionSlickHW(
		[
			[
				"title" => "TVC",
				"mobile" => $img_path . 'Fleasy_peasy-lozenge-Mobile-732x512_video.webp',
				"desktop" => $img_path . 'Fleasy_peasy-lozenge-Desktop-1116x446_video.webp',
				"mp4" => $video_path . '920x518_video_Seresto.mp4',
			],
		]
	);
?>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
