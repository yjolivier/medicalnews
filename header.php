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
				<div class="col-sm-12 col-md-3 col-12 logo">
					<a href="<?php bloginfo('url')?>">
					<h2>
						Medical news
					</h2>
					</a>
					<h5>Actualité medical</h5>
				</div>
				
				<nav class="navbar navbar-expand-lg navbar-light col-sm-12 col-md-7 col-12 menu">
				  <a class="navbar-brand" href="#"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
					    /* Dynamic menu */
					    if(function_exists('wp_nav_menu')) {
					        wp_nav_menu(array(
					        'theme_location' => 'primary',
					        'depth'             => 2,
							'container'         => 'ul',
							'container_class'   => 'collapse navbar-collapse',
					        'menu_id' => 'main-menu',
					        'menu_class' => 'navbar-nav mr-auto',
					        'fallback_cb' => '',
					        'walker' => new Multilevel_Menu()
					        )); 
					    }
					?>
				  </div>
				</nav>
				<div class="col-sm-12 col-md-2 col-12 search-form-top">
					<p class="search-icon">
						<a href="#"></a>
					</p>
				</div>
			</header>
			<?php wp_head();?>
