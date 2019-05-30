<?php get_header(); ?>
<!-- cette fonction php apppelle le fichier header.php-->
<div class="row carousel-container">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
      <?php
        $nbr_slide = 1 ;
        while ( $nbr_slide <= 3):
          $slide_status = "";
          if($nbr_slide ==1) {
           $slide_status = "active";
          }?>

  <div class="carousel-item slide <?php echo $slide_status;?>">
    <img src="<?php echo get_bloginfo('template_url') . "/img/slide_" . $nbr_slide . ".jpg"; ?>" width="100%" height="auto">
      <div class="slide-article">
        <h4>
          Insuffisance
      Cardiaque: Décelée
      par un test sanguin
        </h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur
      adipiscing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua.project
      imagesProvide extra support for senior citizen
        </p>
      </div>
  </div>
          <?php
          $nbr_slide++;
  		  endwhile;
      ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
</div>
<section>
  <h3 align="center">ACTUALITE</h3>
  <hr width="80%" size="0.25" color="#ccc">
	<div class="row block-article">
    <!-- Debut de la boucle -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
	        <div class="card article col-sm-4">
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
  </div>
</section>
<!-- Insertion du fichier footer.php-->
<?php get_footer(); ?>
