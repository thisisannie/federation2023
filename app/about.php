<?php 
  include './config.php';

	// Functions
	function includeHeroImage($img_m, $img_d, $img_dxl, $page_title) {
		include(ABSPATH . '/partials/hero--image.php');
	}
	function includePeopleItem($slug, $name, $role, $thumb) {
		include(ABSPATH . '/partials/card__people.php');
	}
	function includePeopleBio($slug, $name, $role, $image_mobile, $image_desktop, $bio) {
		include(ABSPATH . '/partials/modal__person.php');
	}

	// Data
	$page_title = "About Us";
	$page_description = "We were born to make the world’s most creative and effective ideas to help brands prosper.";
	$img_path = HTML_ROOT . '/assets/images/about/';
	include ABSPATH . '/data/people.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="page--about">
	<?php
		includeHeroImage(
			$img_path . 'Staff-hero_Mobile_v1.webp',
			$img_path . 'Staff-hero_Desktop_v2.webp',
			$img_path . 'Staff-hero_Desktop_XL_v2.webp',
			$page_title,
		);
	?>
	<section>
		<div class="container container-xxl">
			<div class="row justify-content-center">
				<div class="col col-12 col-md-8 col-lg-6">
					<h1>About</h1>
					<p class="intro">At Federation, we’re proudly independent and fiercely ambitious for our clients.</p>
					<p class="intro">Your definition of success defines our mission. It also helps us assemble the right team - experts from a range of digital, creative and design disciplines.</p>
					<p class="intro">Whether you’re a brand, a business or a community, you can trust us to hunt down your success.</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container container-xxl">
			<h3>People &amp; Culture</h3>
			<p>We’re an eclectic group of like-minded people who enjoy making work that matters - to our clients and their customers.</p>
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
						includePeopleBio($item["slug"], $item["name"], $item["role"], $item["image_mobile"], $item["image_desktop"], $item["bio"]);
					}
				?>
			</div>
		</div>
	</section>
	<section id="section--our-services ">
		<div class="finger align-items-center">
			<div class="finger__image">
				<img src="<?=HTML_ROOT;?>/assets/images/about/services-cta.webp" alt="Services at Federation" class="card__img">
			</div>
			<div class="finger__text">
				<h2>Our services</h2>
				<p>Yes, we sweat the big stuff. But we also sweat the smallest of details to help you succeed.</p>
				<div class="gutter--xs"></div>
				<a href="<?=HTML_ROOT;?>/services" class="button">See more</a>
			</div>
		</div>
	</section>
</div>

<?php
	include ABSPATH . '/partials/footer.php';
?>
