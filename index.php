<?php get_header(); ?>
<?php 
  // Use WordPress function instead of PHP's "inclule"
  // @link: https://wpshout.com/get-template-part/
  get_template_part('template-parts/slider');

?>
<section>
  <h3 align="center">ACTUALITE</h3>
  <hr width="80%" size="0.25" color="#ccc">
	<div class="row block-article">
    <!-- Debut de la boucle -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
	        <div class="card article col-md-4 col-sm-6 col-12">
	            <div class="card-img-top" alt="...">
                <?php
                  if ( has_post_thumbnail_or_image ()) { 
                      the_post_thumbnail( "post-thumb" ); 
                  }
                ?>
              </div>
	            <div class="card-body">
	              <p class="card-text">
	                  <h5 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
	          <p>
              <span class="time"><?php the_time('l d/m, Y');?></span>
              <span class="excerpt"><?php medicalnews_excerpt(80);?></span>
            </p>
	            </div>
	        </div>
      <!-- Fin de la boucle -->
      <?php endwhile; ?> 
    <?php endif;?>
    <!-- Pagination, after the loop -->
    <div class="pagination-wrapper" >
      <?php the_posts_pagination( array(
          'mid_size' => 2,
          'prev_text' => __( '&laquo;', 'medicalnews' ),
          'next_text' => __( '&raquo;', 'medicalnews' ),
          'screen_reader_text' => ' '
      ) ); ?>
    </div> 
  </div>
</section>
<!-- Insertion du fichier footer.php-->
<?php get_footer(); ?>
