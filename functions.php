<?php
/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'post-thumb', 350, 200, array( 'center', 'top' ) );
add_image_size( 'single-thumb', 770, 330, array( 'center', 'top' ) );
add_image_size( 'slider-cover', 1100, 400, array( 'center', 'top' ) );

/*
 * Check if thumbnail or firstImage exist
 *
 */
function has_post_thumbnail_or_image(){
	global $post;
	$first_img = medicalnews_get_first_image($post->ID);
	if(!has_post_thumbnail())
		if (empty( $first_img ) ){
			return false;
		}
	return true;
}
/**
 * Get the first image of the post 
 */

function medicalnews_get_first_image($post_id) {
		$post = get_post($post_id);
		$post_content = $post->post_content;
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);
		if( count($matches) > 1) {
			$image_url = $matches[1][0];
			return $image_url;
		}
		return false; 
}



function medicalnews_modify_post_thumbnail_html($html, $post_id, $post_thumbnail_id, $size, $attr) {
	if( '' == $html ) {
		global $post, $posts;
		ob_start();
		ob_end_clean();
		
		$first_img = medicalnews_get_first_image($post_id);
		if ( !empty( $first_img ) ){
			$html = '<img src="' . $first_img . '" alt="' . $alt . '" />';
		}
	}
	return $html;
}
add_filter('post_thumbnail_html', 'medicalnews_modify_post_thumbnail_html', 10, 5);


/**
 * Display the first characters of the article content
 */
function medicalnews_excerpt($max_char, $more_link_text = '...',$notagp = false, $stripteaser = 0, $more_file = '') {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	$content = strip_tags($content);

   if (isset($_GET['p']) && strlen($_GET['p']) > 0) {
	  if($notagp) {
	  echo $content;
	  }
	  else {
	  // echo '<div class="slide_excerpt">';
	  echo $content;
	  // echo "</div>";
	  }
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
		$content = substr($content, 0, $espacio);
		$content = $content;
		if($notagp) {
		echo $content;
		echo $more_link_text;
		}
		else {
		echo $content;
		echo $more_link_text;
		}
   }
   else {
	  if($notagp) {
	  echo $content;
	  }
	  else {
	  echo $content;
	  }
   }
}

/**
 * Configuring widgets
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_sidebar() {

	register_sidebar( array(
		'name'          => 'Widgets sidebar',
		'id'            => 'widgets_sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'widgets_sidebar' );