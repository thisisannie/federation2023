<div id="modal-<?=$slug;?>" class="modal-bio d-none">
	<div class="button button--spot button--exit"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/plus.svg" alt=">"></div>
	<div class="row">
		<div class="col col-12 col-md-6">
			<img src="<?=HTML_ROOT;?>/assets/images/people/<?= $image ?>" alt="<?= $name ?>" title="<?= $name ?>" class="modal-bio--image">
		</div>
		<div class="col col-12 col-md-6 modal-bio--text">
			<div class="text">
				<h2><?=$name;?></h2>
				<h5 class="caps"><?=$role;?></h5>
				<p><?=$bio;?></p>
			</div>
		</div>
	</div>
</div>