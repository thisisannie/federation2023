<?php 
	/* 
	Requires:
		$img_m
		$img_d
		$img_dxl
		$page_title
	*/
?>

<div class="hero">
	<img 
		src="<?=$img_m?>"
		alt="<?=$page_title;?>"
		title="<?=$page_title;?>"
		class="feature-img d-md-none"
	>
	<img 
		srcset="<?=$img_dxl?> 2400w,
		<?=$img_d?> 1600w"
		sizes="calc(100vw - 1.5rem)"
		src="<?=$img_dxl?>"
		alt="<?=$page_title;?>"
		title="<?=$page_title;?>"
		class="feature-img d-none d-md-block"
	>
</div>