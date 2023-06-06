<?php 
  include './config.php';

	// Functions
	function includeAccordionItem($title, $content) {
		include(ABSPATH . '/partials/item__accordion.php');
	}

	// Data
	$page_title = "Our Services";
	$page_description = "We’ve built our team of specialists to think, create and make great work  across inside-out brand strategy, customer experience, technology, digital, direct, data, content, and social.";

	include ABSPATH . '/data/services.php';
	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<img src="<?=HTML_ROOT;?>/assets/images/about/services-hero-m.webp" alt="" class="feature-img d-md-none">
	<img src="<?=HTML_ROOT;?>/assets/images/about/services-hero-d.webp" alt="" class="feature-img d-none d-md-block">
</div>
<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1>Services</h1>
				<p class="intro">We believe the more integrated the approach, the better the result. So, we’ve built our team of specialists to think, create and make great work across inside-out brand strategy, customer experience, technology, digital, direct, data, content, and social.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<div class="accordion">
					<!-- Accordion items -->
					<?php
						foreach ($services as $item) {
							includeAccordionItem($item["title"], $item["content"]);
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>
