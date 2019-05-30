<?php include "header.php"; ?>
      <div class="row">
        <div class="slide-archive">
          <img src="<?php bloginfo('template_url')?>/img/slide-archive-background.jpg">
          <div class="slide-article">
            <h2>ACTUALITE</h2>
          </div>
        </div>
      </div>
      <div class="row main-container">
        <div class="row block-article col-sm-8">
          <!-- Debut de la boucle -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="card article col-sm-6">
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
        <?php include "sidebar.php"; ?>
      </div>
       
<?php include "footer.php"; ?>