<!-- cette fonction php apppelle le fichier header.php-->
<div class="row carousel-container">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
      <!--Debut de la boucle-->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
          
          $slide_status = "";
          if($nbr_slide ==1) {
           $slide_status = "active";
          }?>

      <div class="carousel-item slide <?php echo $slide_status;?>">
        <?php
                  if ( has_post_thumbnail_or_image ()) { 
                      the_post_thumbnail( "slider-cover" ); 
                  }
                ?>
            <div class="slide-article">
              <!--Debut de la boucle-->
                  <h4>
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                  </h4>
                  <p>
                    <span class="excerpt"><?php medicalnews_excerpt(120);?></span>
                  </p>
            </div>
      </div>
          <?php
          $nbr_slide++;
  		  endwhile;
      endif;
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