<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Medical News</title>
	</head>
	<body>
		<div class="container">
			<header class="row">
				<div class="col-sm-3 col-12 logo">
					<a href="<?php bloginfo('url')?>">
					<h2>
						Medical news
					</h2>
					</a>
					<h5>Actualité medical</h5>
				</div>
				<div class="col-sm-7 col-12 menu">
					<?php
		                /* Dynamic menu */
		                if(function_exists('wp_nav_menu')) {
		                    wp_nav_menu(array(
		                    'theme_location' => 'primary',
		                    'container' => '',
		                    'container_class' => '',
		                    'container_id' => '',
		                    'menu_id' => 'main-menu',
		                    'menu_class' => 'main-nav',
		                    'fallback_cb' => '',
		                    'walker' => new Multilevel_Menu()
		                    )); 
		                }
		            ?>
				</div>
				<div class="col-sm-2 col-12">
					<nav class="search-form">
						<p><a href="#"></a></p>
					</nav>
				</div>
			</header>
			<?php wp_head();?>
