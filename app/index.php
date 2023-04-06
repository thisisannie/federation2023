<?php 
	$page_title = "Provocative advertising";
	$page_description = "We’re Federation, an advertising agency creating provocative ideas that live within advertising, entertainment and technology.";
  include 'config.php';
	include ABSPATH . '/partials/header.php';
?>
<div id="hero--home" class="hero hero--home">
		<!-- <video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.webm" type="video/webm"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.mp4" type="video/mp4"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_mobile.ogv" type="video/ogg"></video> -->
		<span id="what1" class="what h1 d-none d-md-inline-block">What does success</span>
		<span id="what2" class="what h1 d-none d-md-inline-block">look like to you?</span>
</div>
<div class="container">
	<h1 class="d-md-none">What does success look like to you?</h1>
</div>
<section>
	<div class="container container-wide">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8">
				<p>We’re Federation, an advertising agency for the new age. We create provocative ideas that live within advertising, entertainment and technology.</p>
				<a href="#" class="button">About us</a>
			</div>
		</div>	
	</div>
</section>

<section>
	<div class="container container-wide container--">
		<div class="row">
			<div class="col col-md-4">
				<h2>Our work</h2>
				<a href="" class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
				<a href="" class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
				<a href="#" class="button button--reverse">See all work <img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/arrow-right.svg" alt=">"></a>
			</div>
			<div class="col">
				<div class="cards">
					<a href="#" class="card">
						<img src="<?=HTML_ROOT;?>/assets/images/placeholders/card.jpg" alt="placeholder">
						<div class="text">
							<span class="card__header--sm">Maratime NZ</span>
							<span class="card__header--lg">Kia Mataara</span>
							<div class="labels">
								<span class="label">Brand</span>
								<span class="label">OOH</span>
								<span class="label">Social</span>
							</div>
							<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/arrow-right.svg" alt=">"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	include ABSPATH . '/partials/footer.php';
?>
