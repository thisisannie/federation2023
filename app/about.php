<?php 
  include './config.php';

	// Functions
	function includePeopleItem($slug, $name, $role, $thumb) {
		include(ABSPATH . '/partials/card__people.php');
	}

	// Data
	$page_title = "About Us";
	$page_description = "We were born to make the world’s most creative and effective ideas to help brands prosper.";
	include ABSPATH . '/people__data.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<img src="<?=HTML_ROOT;?>/assets/images/placeholders/video-placeholder.webp" alt="" class="feature-img">
</div>
<section>
	<div class="container container-wide">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1>About</h1>
				<p class="intro">We were born to make the world’s most creative and effective ideas to help brands prosper.</p>
				<p class="intro">Born to break down the silos between advertising agencies and design companies to deliver seamless thinking from shelf to screen.</p>
				<p class="intro">Born to make a difference. To brands, to businesses, to communities and to everyone that works at Federation.</p>
			</div>
		</div>
		<div id="people-cards" class="cards">
			<!-- Work Cards -->
			<?php
				foreach ($people as $item) {
					includePeopleItem($item["slug"], $item["name"], $item["role"], $item["thumb"]);
				}
			?>
		</div>
	</div>
</section>


<?php
	include ABSPATH . '/partials/footer.php';
?>
