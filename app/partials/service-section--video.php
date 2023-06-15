<?php 
	/* 
	Requires:
		$title
		$mp4
		$poster
	*/
?>

<section class="service-section">		
	<div class="service align-items-center">
		<div class="service__image modal-video-container">
			<video preload="auto" width="100%" class="modal-video" poster="<?=$poster;?>"><source src="<?=$mp4;?>" type="video/mp4"></video>
			<div class="button button--spot button--exit"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt=">"></div>
			<a class="button button--play">Play <img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/play.svg" alt="►"></a>
		</div>
		<div class="service__text">
			<h4><?=$title;?></h4>
		</div>
	</div>
</section>