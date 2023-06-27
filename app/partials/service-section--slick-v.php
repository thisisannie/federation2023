<?php 
	/* 
	Requires:
		$title
		$cards[['title', 'mobile', 'desktop']]
	*/
?>

<section class="service-section service-section--has-pill_v">
	<div class="service service__40-60 align-items-center">
		<div class="service__image">
			<div id="slick__pill_v" dir="rtl" class="cards">
				<?php				
					foreach ($cards as $item) {
						echo 
						'<div class="card">
							<div class="card__img">
								<img 
									srcset="'.$item['desktop'].' 670w, '.$item['mobile'].' 555w" 
									sizes="50vw" 
									src="'.$item['desktop'].'" 
									alt="'.$item['title'].'" 
									title="'.$item['title'].'"
								>
							</div>
						</div>';
					}
				?>				
			</div>
		</div>
		<div class="service__text">
			<h4><?=$title?></h4>
			<div class="slick--controls">
				<a href="" class="button button--spot prev slick-pill-v-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
				<a href="" class="button button--spot next slick-pill-v-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
			</div>
		</div>
	</div>
</section>
