<?php 
  include '../config.php';

	// Data
	$page_title = "Kia Mataara | Maratime New Zealand";
	$page_description = "From the rich consumer insights and behavioural data we harness, to the creation of a compelling brand narrative.";
	$styles = [
		'work__detail.css',
	];
	include ABSPATH . '/work__data.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<img src="<?=HTML_ROOT;?>/assets/images/work/maratime/banner-1600x800.webp" alt="" class="feature-img">
</div>
<section>
	<div class="container container-wide">
		<div class="row">
			<h1 class="h1--work maintain-margin">Maratime</h1>
		</div>
		<div class="row justify-content-center">
			<div class="col col-12 col-md-6">
				<h2>Kia Mataara</h2>
				<p class="maintain-margin"><strong>Services:</strong>
					<br>Brand
					<br>Social
				</p>
			</div>
			<div class="col col-12 col-md-6">
				<h5>Challenge</h5>
				<p>In a highly competitive market, local and international universities found themselves fighting over the same students. But from a marketing point of view, it was all a sea of same-ness. Research showed that Massey had the second to lowest conversion from consideration preference across all universities. With a much smaller share of voice, Massey needed to do things differently.</p>
				<h5>Solution</h5>
				<p>The tertiary sector is rife with images of students gazing misty-eyed into the future. But the truth is that student life can be difficult and even overwhelming. We embraced the irrefutable fact that only mahi gets results. Success comes from a thousand crazy, exhausting, exhilarating moments. In a visually distinctive way, and with a whole lot of personality, we brought to life one student insight after another, showing how Massey walks beside their students to help them succeed.</p>
				<h5>Results</h5>
				<p>While the competition waved their chequebooks, we increased awareness and conversion on a small budget. Our new platform worked its socks off. Massey went from the number five spot to the most preferred University in New Zealand, in just three months. Job done.</p>
			</div>
		</div>
	</div>
</section>
<div class="services">
	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<div class="graphic massey-stat" style="background-color:#f28503;">
					<div class="stat-number">#1</div>
					<div class="stat d-none d-md-block">Massey went from the number five spot to the most preferred university in New Zealand, in just three months.</div>
				</div>
			</div>
			<div class="service__text">
				<h4 class="d-md-none">Massey went from the number five spot to the most preferred university in New Zealand, in just three months.</h4>
			</div>
		</div>
	</section>
	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<img src="<?=HTML_ROOT;?>/assets/images/work/maratime/service-tvc-1200x600.webp" alt="placeholder">
			</div>
			<div class="service__text">
				<h4>TVC</h4>
			</div>
		</div>
	</section>
	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<img src="<?=HTML_ROOT;?>/assets/images/work/maratime/service-social-1200x600.webp" alt="placeholder">
			</div>
			<div class="service__text">
				<h4>Social</h4>
			</div>
		</div>
	</section>
	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">
				<img src="<?=HTML_ROOT;?>/assets/images/work/maratime/service-website-1200x600.webp" alt="placeholder">
			</div>
			<div class="service__text">
				<h4>Website</h4>
			</div>
		</div>
	</section>
</div>

<?php
	include ABSPATH . '/partials/footer.php';
?>
