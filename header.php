<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- bloginfo('template_url') // affiche l'url absolue du theme -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Medical News</title>
	</head>
	<body>
		<div class="container">
			<header class="row">
				<div class="col-sm-3 logo">
					<a href="<?php bloginfo('url')?>">
					<h2>
						Medical news
					</h2>
					</a>
					<h5>Actualité medical</h5>
				</div>
				<div class="col-sm-7 menu">
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
				<div class="col-sm-2">
					<nav class="search-form">
						<p><a href="#"></a></p>
					</nav>
				</div>
			</header>
			<?php wp_head();?>
