<?php 
  include './config.php';

	// Functions
	function includeAccordionItem($title, $content) {
		include(ABSPATH . '/partials/item__accordion.php');
	}

	// Data
	$page_title = "Contact";
	$page_description = "Have a business challenge or market opportunity you need fresh thinking on? We'll offer an exciting way forward strategically, creatively, commercially.";

	include ABSPATH . '/data/services.php';
	include ABSPATH . '/partials/header.php';
?>
<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1>Contact</h1>
				<p class="intro">Have a business challenge or market opportunity you need fresh thinking on? We’re pretty sure we can offer you an interesting point of view and an exciting way forward that’s on the money strategically, creatively, commercially. Let’s talk.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="finger align-items-center">
		<div class="finger__image">
			<img src="<?=HTML_ROOT;?>/assets/images/contact/map.webp" alt="Level 1, 111 Wellesley Street West, Auckland 1010">
		</div>
		<div class="finger__text">
			<h4>General enquiries</h4>
			<p>
				<a href="tel:+6493041200" class="highlight">+64 9 304 1200</a><br>
				<a href="mailto:hello@federation.net.nz" class="highlight">hello@federation.net.nz</a>
			</p>
			<p>
				<a href="https://www.google.com/maps/place/Level+1%2F111+Wellesley+Street+West,+Auckland+CBD,+Auckland+1010/@-36.8489407,174.756497,17z/data=!3m1!4b1!4m6!3m5!1s0x6d0d47f1e6053cbf:0xb837e4a9991cb353!8m2!3d-36.8489407!4d174.7586857!16s%2Fg%2F11s2mr0tmg" target="_blank" class="highlight">
					Level 1, 111 Wellesly Street West<br>
					Auckland, 1010<br>
					New Zealand</a>
			</p>
			<p>
				<strong>Sharon Henderson - Founder/Director</strong><br>
				<a href="mailto:sharonh@federation.net.nz" class="highlight">sharonh@federation.net.nz</a>
			</p>
			<p>
				<strong>Olly Walker-Boden - Managing Partner</strong><br>
				<a href="mailto:ollyb@federation.net.nz" class="highlight">ollyb@federation.net.nz</a>
			</p>
			<p>
				<strong>Elizabeth Beatty - Managing Partner</strong><br>
				<a href="mailto:elizabethb@federation.net.nz" class="highlight">elizabethb@federation.net.nz</a>
			</p>
		</div>
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>