<?php 
	/* 
	Requires:
		$cards[['title', 'mobile', 'desktop']]
	*/
?>

<section class="service-section">
	<div class="container container-xxl">
		<div id="slick__pill_hw" class="">
			<?php				
				foreach ($cards as $item) {
					echo 
					'<div class="pill">
						<div class="pill__image">
							<img src="'.$item['mobile'].'" alt="placeholder" class="d-md-none">
							<img src="'.$item['desktop'].'" alt="placeholder" class="d-none d-md-block">
						</div>
						<div class="pill__text">
							<h4 class="title">'.$item['title'].'</h4>
						</div>
					</div>';
				}
			?>
		</div>

		<div class="slick--controls pill__controls pill__controls_hw">
			<a href="" class="button button--spot prev slick-pill-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
			<a href="" class="button button--spot next slick-pill-next"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
		</div>
	</div>
</section>