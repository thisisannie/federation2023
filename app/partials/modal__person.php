<div id="modal-<?=$slug;?>" class="modal-bio d-none">
	<div class="button button--spot button--exit"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt=">"></div>
	<div class="row">
		<div class="col col-12 col-md-6">
			<img src="<?=HTML_ROOT;?>/assets/images/people/<?= $image_mobile ?>" alt="<?= $name ?>" title="<?= $name ?>" class="modal-bio--image d-md-none">
			<img src="<?=HTML_ROOT;?>/assets/images/people/<?= $image_desktop ?>" alt="<?= $name ?>" title="<?= $name ?>" class="modal-bio--image d-none d-md-block">
		</div>
		<div class="col col-12 col-md-6 modal-bio--text">
			<div class="text">
				<h3 class="d-md-none"><?=$name;?></h3>
				<h2 class="d-none d-md-block"><?=$name;?></h2>
				<h5 class="caps"><?=$role;?></h5>
				<p><?=$bio;?></p>
			</div>
		</div>
	</div>
</div>