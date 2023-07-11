<div class="testimonial finger align-items-center">
	<div class="finger__image">
		<img src="<?=HTML_ROOT;?>/assets/images/testimonials/<?= $image_mobile ?>" alt="<?= $name ?>, <?= $role ?> at <?= $company ?>" class="card__img d-md-none">
		<img src="<?=HTML_ROOT;?>/assets/images/testimonials/<?= $image_desktop ?>" alt="<?= $name ?>, <?= $role ?> at <?= $company ?>" class="card__img d-none d-md-block">
	</div>
	<div class="finger__text">
		<h4 class="quote"><?= $quote ?></h4>
		<p><?= $name ?><br>
			<?= $role ?><br>
			<?= $company ?>
		</p>
		
		<a href="" class="button button--spot prev slick-testimonial-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>

		<a href="" class="button button--spot next slick-testimonial-next"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>

	</div>
</div>	