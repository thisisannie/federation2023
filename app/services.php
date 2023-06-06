<?php 
  include './config.php';

	// Functions
	function includePeopleItem($slug, $name, $role, $thumb) {
		include(ABSPATH . '/partials/card__people.php');
	}

	// Data
	$page_title = "Our Services";
	$page_description = "We’ve built our team of specialists to think, create and make great work  across inside-out brand strategy, customer experience, technology, digital, direct, data, content, and social.";

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
					<div class="item active">
						<div class="title">
							<h4>Brand</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>We believe in inside-out brand stories that bring the culture and values of your DNA to life. We extend your brand strategy across internal, external, customer, and stakeholder audiences to create genuine brand engagement.</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Sustainability transformation</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Social Behaviour Change</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Social Media</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Customer Experience</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Performance Marketing</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Website Design</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Experiential Events and Activation</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Multi-channel Campaigns</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
					<div class="item">
						<div class="title">
							<h4>Media Planning</h4>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt="+"></div>
						</div>
						<div class="content"><p>lorem</p></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>
