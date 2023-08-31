<div class="section-next cards">
	<h2 class="d-none d-lg-block section-next--next">Next</h2>
	<a href="<?=HTML_ROOT;?>/work/<?=$slug;?>" class="card card--next">
		<div class="card__img gradient-<?= $gradient ?>">
			<img src="<?=HTML_ROOT;?>/assets/images/work/<?=$slug;?>/<?=$img;?>" alt="<?=$company;?> - <?=$brief;?>" class="">
		</div>
		<div class="text">
			<span class="card__header--sm"><?=$company;?></span>
			<span class="card__header--lg"><?=$brief;?></span>
			<div class="labels">
				<?php
					$three_tags = array_slice($tags, 0, 3);
					foreach($three_tags as $tag) {
						echo '<span class="label">' . $tag . '</span>';
					}
				?>
			</div>
			<div class="button button--spot"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/arrow-right.svg" alt=">"></div>
		</div>
	</a>
</div>