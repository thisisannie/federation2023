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
	$page_title = "DoorDash Launch";
	$page_description = "With Kiwi tongue planted firmly in cheek, we brought the platform of ‘delivering the goods from your hood’ to life. Tom Sainsbury, popular local comedian, brought the Nu Zild attitude in social and on radio. And prominent OOH appeared in every single local Auckland hood.";
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
	$video_path = HTML_ROOT . '/assets/videos/work/' . $page_data['slug'] . '/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'DoorDash-hero_Mobile.webp',
		$img_path . 'DoorDash-hero_Desktop.webp',
		$img_path . 'DoorDash-hero_Desktop_XL.webp',
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
				<p>DoorDash, the number one food delivery service in the States, was poised to take Auckland by storm. But despite being run by locals and delivering local goods, DoorDash was viewed as an outsider. So how best to convince Kiwis that this international brand was local as?</p> 
				<h5>Solution</h5>
				<p>By celebrating the awesomeness of ‘local’ through local knowledge, local tastes and local humour. With Kiwi tongue planted firmly in cheek, we brought the platform of ‘delivering the goods from your hood’ to life. Tom Sainsbury, popular local comedian, brought the Nu Zild attitude in social and on radio. And prominent OOH appeared in every single local Auckland hood.</p>
				<h5>Success</h5>
				<p>DoorDash began signing new merchants and smashing targets immediately. Top merchants even began breaking exclusive contracts with UberEats to join the food delivery juggernaut.</p>

				<!-- <p>Since launching Auckland on 5 July, DoorDash have built a positive sales momentum, signing new merchants and pacing ahead of their Q3 target. So good, that their sales teams are receiving positive reactions everywhere with top merchants considering breaking exclusivity contracts with UberEats to come on board!</p>
				<p>Current DoorDash NZ perceptions are:</p>
        <ul>
          <li>Deliver great service, while UberEats has a mix of good and bad experiences</li>
          <li>Offer good prices, while UberEats is seen as expensive</li>
          <li>Are fast and efficient, while UberEats is perceived as slow. </li>
          <li>Are American. While they are proud of their global family, we want to reinforce our local approach.  This is supported by our “Delivering the goods from your hood” platform</li>
          <li>We know a key benefit for consumers to use DoorDash is in discovering new restaurants. </li>
          <li>We know merchants use DoorDash for marketing reach and are looking for more ways to leverage DoorDash to find new customers.</li>
        </ul> -->
			</div>
		</div>
	</div>
</section>

<div class="services">
  <section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				
				<?php /* Mobile only */ ?>
				<div class="text-graphic d-md-none" style="background-color: #EB1700; background-image:url(<?=$img_path?>DoorDash-Call-out-mobile); background-size: cover;">
					<div class="stat-number">46%</div>
				</div>

				<?php /* Desktop only */ ?>
				<div class="text-graphic d-none d-md-flex" style="background-color: #EB1700; background-image:url(<?=$img_path?>DoorDash-Call-out-XL.webp); background-size: cover;">
					<div class="stat-number">56%</div>
					<div class="stat">category penetration within 6 weeks</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">category penetration within 6 weeks</h4>
			</div>
		</div>
	</section>

	<?php
		includeServiceSectionVideo(
			"TVC",
			$video_path . "920x518_Doordash_30_v1.mp4",
			$img_path . "DoorDash-TVC-XL.webp",
		);
		includeServiceSection(
			"Billboard",
			"Billboard",
			$img_path . "DoorDash-Billboard-mobile.webp",
			$img_path . "DoorDash-Billboard.webp",
			$img_path . "DoorDash-Billboard_XL.webp",
		);
		includeServiceSectionVideo(
			"Social Videos",
			$video_path . "920x518_DoorDash_social_vids_v1.mp4",
			$img_path . "DoorDash-Social-XL.webp",
		);
	?>
</div>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
