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
				<p class="intro">Do you have a business challenge or a market opportunity? Come see us for a fresh point of view that’s  strategically savvy, creatively compelling and cost-effective. Let’s talk.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="finger align-items-center">
		<div class="finger__image finger__image--contact">
			<!-- <img src="<?=HTML_ROOT;?>/assets/images/contact/map.webp" alt="Level 1, 111 Wellesley Street West, Auckland 1010"> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1637.9455160764653!2d174.75734153649358!3d-36.848906287243906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47f1e6053cbf%3A0xb837e4a9991cb353!2sLevel%201%2F111%20Wellesley%20Street%20West%2C%20Auckland%20CBD%2C%20Auckland%201010!5e0!3m2!1sen!2snz!4v1687473214873!5m2!1sen!2snz" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
