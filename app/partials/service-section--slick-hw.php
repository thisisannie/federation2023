<?php 
	/* 
	Requires:
		$cards[['title', 'mobile', 'desktop', 'mp4']]
	*/
?>

<section class="service-section">
	<div class="container container-xxl">
		<div id="slick__pill_hw" class="">
			<?php				
				foreach ($cards as $item) {
					if(is_string($item['mp4'])) {
						echo  
						'<div class="pill">
							<div class="modal-video-container">
							<video preload="auto" width="100%" class="modal-video" poster="'.$item['desktop'].'"><source src="'.$item['mp4'].'" type="video/mp4"></video>
								<div class="button button--spot button--exit"><img class="svg" src="'.HTML_ROOT.'/assets/images/utility/plus.svg" alt=">"></div>
								<a class="button button--play">Play <img class="svg" src="'.HTML_ROOT.'/assets/images/utility/play.svg" alt="►"></a>
							</div>
							<div class="pill__text">
								<h4 class="title">'.$item['title'].'</h4>
							</div>
						</div>';
					} else {
						echo 
						'<div class="pill">
							<div class="pill__image">
								<img src="'.$item['mobile'].'" alt="'.$item['title'].'" class="d-md-none">
								<img src="'.$item['desktop'].'" alt="'.$item['title'].'" class="d-none d-md-block">
							</div>
							<div class="pill__text">
								<h4 class="title">'.$item['title'].'</h4>
							</div>
						</div>';
					}					
				}
			?>
		</div>

		<div class="slick--controls pill__controls pill__controls_hw">
			<a href="" class="button button--spot prev slick-pill-hw-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
			<a href="" class="button button--spot next slick-pill-hw-next"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
		</div>
	</div>
</section>