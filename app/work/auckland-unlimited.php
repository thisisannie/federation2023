<?php 
  include '../config.php';

	// Functions
	function includeNextItem($slug, $company, $brief, $img, $gradient, $tags) {
		include(ABSPATH . '/partials/card__next.php');
	}

	// Data
	$page_title = "Auckland Unlimited - Iconic Eats";
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
	<img src="<?=$img_path;?>hero.webp" alt="<?=$page_title?>" class="feature-img">
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
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis nisl rhoncus mattis rhoncus. Consequat id porta nibh venenatis cras. Gravida quis blandit turpis cursus in hac. Scelerisque varius morbi enim nunc. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Accumsan tortor posuere ac ut consequat semper viverra nam libero. Accumsan tortor posuere ac ut. Integer enim neque volutpat ac tincidunt. Cras semper auctor neque vitae tempus quam pellentesque nec. Dolor morbi non arcu risus. Est ante in nibh mauris. Dignissim suspendisse in est ante in.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container container-xxl">
		<div id="slick__pill" class="">

			<div class="pill">
					<div class="pill__image">
						<img src="<?=$img_path?>/Carousel-image.webp" alt="placeholder" class="d-md-none">
						<img src="<?=$img_path?>/Carousel-image.webp" alt="placeholder" class="d-none d-md-block">
					</div>
					<div class="pill__text">
						<h4 class="title">Title 1</h4>
					</div>
				</div>
				<div class="pill">
					<div class="pill__image">
						<img src="<?=$img_path?>/hero.webp" alt="placeholder" class="d-md-none">
						<img src="<?=$img_path?>/hero.webp" alt="placeholder" class="d-none d-md-block">
					</div>
					<div class="pill__text">
						<h4 class="title">Title 2</h4>
					</div>
				</div>
			</div>

			<div class="slick--controls pill__controls">
				<a href="" class="button button--spot prev slick-pill-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
				<a href="" class="button button--spot next slick-pill-next"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
			</div>
	</div>
</section>

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
