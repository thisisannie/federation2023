<?php 
  include './config.php';

	// Functions
	function includePeopleItem($slug, $name, $role, $thumb) {
		include(ABSPATH . '/partials/card__people.php');
	}
	function includePeopleBio($slug, $name, $role, $image, $bio) {
		include(ABSPATH . '/partials/modal__person.php');
	}

	// Data
	$page_title = "About Us";
	$page_description = "We were born to make the world’s most creative and effective ideas to help brands prosper.";
	include ABSPATH . '/people__data.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<img src="<?=HTML_ROOT;?>/assets/images/about/header-desktop.webp" alt="" class="feature-img">
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
	</div>
</section>
<section>
	<div class="container container-wide">
		<h3>People &amp; Culture</h3>
		<p>We're an eclectic group of like-minded individuals who enjoy working together and making things that matter to our clients, their customers, and each of us.</p>
		<div id="people-cards" class="cards">
			<!-- People Cards -->
			<?php
				foreach ($people as $item) {
					includePeopleItem($item["slug"], $item["name"], $item["role"], $item["thumb"]);
				}
			?>
			<!-- People Bios -->
			<?php
				foreach ($people as $item) {
					includePeopleBio($item["slug"], $item["name"], $item["role"], $item["image"], $item["bio"]);
				}
			?>
		</div>
	</div>
</section>
<section id="section--our-services ">
	<div class="finger align-items-center">
		<div class="finger__image">
			<img src="<?=HTML_ROOT;?>/assets/images/about/services.webp" alt="placeholder" class="card__img">
		</div>
		<div class="finger__text">
			<h2>Our services</h2>
			<p>Smarts come as standard at Federation. We sweat the big and the small to deliver transformative results, working at the speed you need to solve challenges and optimise opportunities.</p>
			<a class="button">See more</a>
		</div>
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>
