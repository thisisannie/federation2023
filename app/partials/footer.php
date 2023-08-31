<?php
	// This file accepts 
	// $scripts: Array of external/internal files. Internal are found in /assets/js/
?>
	
	<footer>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col col-12 col-md-10">
					<div class="row">
						<div class="col col-12 col-sm-6 col-md-3">
							<div class="footer-menu">
								<ul class="small caps">
									<li><a href="<?=HTML_ROOT;?>">Home</a></li>
									<li><a href="<?=HTML_ROOT;?>/work">Work</a></li>
									<li><a href="<?=HTML_ROOT;?>/about">About</a></li>
									<li><a href="<?=HTML_ROOT;?>/services">Services</a></li>
									<li><a href="<?=HTML_ROOT;?>/contact">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col col-12 col-sm-6 col-md-3">
							<div class="address">
								<p class="small">
								<strong>Federation</strong><br>
								<a href="https://www.google.com/maps/place/Level+1%2F111+Wellesley+Street+West,+Auckland+CBD,+Auckland+1010/@-36.8489407,174.756497,17z/data=!3m1!4b1!4m6!3m5!1s0x6d0d47f1e6053cbf:0xb837e4a9991cb353!8m2!3d-36.8489407!4d174.7586857!16s%2Fg%2F11s2mr0tmg" target="_blank">Level 1, 111 Wellesly Street West<br>
								Auckland, 1010<br>
								New Zealand</a></p>
							</div>
						</div>
						<div class="col col-12 col-md-6">
							<div class="connect">
								<p class="small"><a target="_blank" href="https://nz.linkedin.com/company/federation.">Connect with us: <img src="<?=HTML_ROOT;?>/assets/images/utility/linkedin.svg" class="svg linkedin" alt="LinkedIn" title="LinkedIn"></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<?php 
		// Print external scripts
		if (isset($scripts)) {
			foreach ($scripts as $script) {
				if(str_contains($script, 'http')) {
					echo '<script src="' . $script . '"></script>';
				}
			}
		}
	?>
	<script src="<?=HTML_ROOT;?>/assets/js/scripts.js"></script>
	<?php 
		// Print internal scripts
		if (isset($scripts)) {
			foreach ($scripts as $script) {
				if(! str_contains($script, 'http')) {
					echo '<script src="' . HTML_ROOT . '/assets/js/' . $script . '"></script>';
				}
			}
		}
	?>
</body>
</html>
