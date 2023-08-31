<?php 
  include './config.php';

	// Functions
	function includeWorkItem($slug, $company, $brief, $img_m, $img_d, $gradient, $tags) {
		include(ABSPATH . '/partials/card__work.php');
	}

	// Data
	$page_title = "Work Portfolio";
	$page_description = "From the rich consumer insights and behavioural data we harness, to the creation of a compelling brand narrative.";
	include ABSPATH . '/data/work.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/work/920x518_work_v2.mp4" type="video/mp4" poster="<?=HTML_ROOT;?>/assets/images/work/video-still.webp"></video>
</div>
<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1>Our Work</h1>
				<p class="intro">Building brands, winning hearts, opening wallets. Here&nbsp;are&nbsp;some&nbsp;of our most talked-about and effective advertising campaigns.</p>
				<!-- <div id="work-filters">
					<h5 class="filter-by">Filter by service:</h5>
					<a id="filter--brand" class="label">Brand</a>
					<a id="filter--social" class="label">Social</a>
					<a id="filter--creative" class="label">Creative</a>
					<a id="filter--website" class="label">Website</a>
					<a id="filter--strategy" class="label">Strategy</a>
				</div> -->
				<div class="gutter"></div>
			</div>
		</div>
	</div>
	<div id="work-cards">
		<div class="cards work-cards--primary">
			<!-- Primary Work Cards -->
			<?php
				$primary_work = array_slice($work, 0, 9);
					foreach ($primary_work as $item) {
						includeWorkItem($item["slug"], $item["company"], $item["brief"], $item["thumb_primary_m"], $item["thumb"], $item["gradient"], $item["tags"]);
					}
			?>
		</div>
		<div class="cards work-cards--secondary">
			<!-- Secondary Work Cards -->
			<?php
				$secondary_work = array_slice($work, 9);
				foreach ($secondary_work as $item) {
						includeWorkItem($item["slug"], $item["company"], $item["brief"], $item["thumb"], $item["thumb"], $item["gradient"], $item["tags"]);
					}
			?>
		</div>
	</div>
</section>


<?php
	include ABSPATH . '/partials/footer.php';
?>
