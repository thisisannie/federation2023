<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo !empty($page_title) ? $page_title . " | Federation" : 'Federation' ?>
	</title>

	<!-- No caching during development -->
	<meta http-equiv="Expires" content="Tue, 01 Jan 1995 12:12:12 GMT">
	<meta http-equiv="Pragma" content="no-cache">

	<!-- Favicons -->
	<link rel="icon" href="<?=HTML_ROOT;?>/favicon.ico" sizes="any">
	<link rel="icon" href="<?=HTML_ROOT;?>/icon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="<?=HTML_ROOT;?>/apple-touch-icon.png">
	<link rel="manifest" href="<?=HTML_ROOT;?>/manifest.webmanifest">

	<meta name="description" content="<?php echo !empty($page_description) ? $page_description : 'We’re Federation, an advertising agency creating provocative ideas that live within advertising, entertainment and technology.' ?>">
	<link rel="stylesheet" href="<?=HTML_ROOT;?>/assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="<?=HTML_ROOT;?>/assets/css/styles.css">
	<?php 
		if (isset($styles)) {
			foreach ($styles as $style) {
				echo '<link rel="stylesheet" href="' . HTML_ROOT . '/assets/css/' . $style . '">';
			}
		}		
	?>
</head>
<body>
	<header>
		<div id="logo-container">
			<a href="<?=HTML_ROOT;?>">
				<img src="<?=HTML_ROOT;?>/assets/images/brand/logo-federation.svg" alt="Federation" class="logo">
			</a>
		</div>
		<div id="nav__mobile-toggle">
			<div class="nav__mobile-toggle__bar"></div>
			<div class="nav__mobile-toggle__bar"></div>
			<div class="nav__mobile-toggle__bar"></div>
			<div class="nav__mobile-toggle__bar"></div>
		</div>
		<nav>
			<div id="nav__click-out"></div>
			<div class="nav-item"><a href="<?=HTML_ROOT;?>/work.php">Work</a></div>
			<div class="nav-item"><a href="<?=HTML_ROOT;?>/about.php">About</a></div>
			<div class="nav-item"><a href="<?=HTML_ROOT;?>/services.php">Services</a></div>
			<!-- <div class="nav-item has-child"><a>About </a>
				<div class="has-child__click-out"></div>
				<div class="nav-sub-items">
					<div class="nav-sub-item"><a>People</a></div>
					<div class="nav-sub-item"><a>Places</a></div>
					<div class="nav-sub-item"><a>Things</a></div>
				</div>
			</div> -->
			<div class="nav-item"><a href="<?=HTML_ROOT;?>/contact.php">Contact</a></div>
		</nav>
	</header>
	