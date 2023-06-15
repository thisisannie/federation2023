<?php 
	/* 
	Requires:
		$title
		$alt
		$img_m
		$img_d
		$img_dxl
	*/
?>

<section class="service-section">
	<div class="service align-items-center">
		<div class="service__image">

			<?php /* Mobile only - not affected by pixel density */ ?>
			<img
				src="<?=$img_m;?>"
				alt="<?=$alt;?>"
				title="<?=$alt;?>"
				class="d-md-none"
			>

			<?php /* Desktop only */ ?>
			<img 
				srcset="<?=$img_dxl;?> 2000w,
				<?=$img_d;?> 1200w" 
				sizes="75vw"
				src="<?=$img_d;?>"
				alt="<?=$alt;?>"
				title="<?=$alt;?>"
				class="d-none d-md-block"
			>
		</div>
		<div class="service__text">
			<h4><?=$title;?></h4>
		</div>
	</div>
</section>
