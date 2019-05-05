<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<meta name='description' content='<?php bloginfo('description'); ?>'>
<title><?php wp_title('|', true, 'right');bloginfo('name'); ?></title>
<link rel='icon' href='/wordpress/wp-content/themes/nikros/images/bg-404-4.png'>
<?php wp_head(); ?>
</head>
<body data-spy='scroll' data-target='.navbar'>
	<div class='navbar navbar-expand-sm fixed-top'>
		<a class='navbar-brand' href='<?php bloginfo('url'); ?>'><?php bloginfo('name'); ?></a>
		<button class='navbar-toggler' data-toggle='collapse' data-target='#myNav'>
			<span class='fas fa-bars'></span>
		</button>
		
		<div class='collapse navbar-collapse' id='myNav'>
		<div class='navbar-nav'>
			<a class='nav-item nav-link' href='#first'>خدمات</a>
			<a class='nav-item nav-link' href='#first'>فناوری</a>
			<a class='nav-item nav-link' href='#second'>قیمت</a>
			<a class='nav-item nav-link' href='#third'>درباره</a>
			<a class='nav-item nav-link' href='#fourth'>تماس</a>
		</div>
		</div>
	</div><!-- end navbar -->
	
	<div class='clear'></div>