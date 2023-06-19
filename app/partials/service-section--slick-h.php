<?php 
	/* 
	Requires:
		$title
		$cards[['title', 'mobile', 'desktop']]
	*/
?>

<section class="service-section">
	<div class="service align-items-center">
		<div class="service__image">
			<div id="slick__pill_h" dir="rtl" class="cards">
				<?php				
					foreach ($cards as $item) {
						echo 
						'<div class="pill">
							<div class="pill__image">
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
