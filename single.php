<?php get_header(); ?>
<!-- debut de la boucle -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <section class="row main-container">
          <section class="col-sm-8 single-post">
              <h3 class="title"><?php the_title();?></h3>
              <section class="contain-article">
                <!--affiche le contenu de l'article -->
                <?php the_content(); ?>
              </section>
          </section>
          <?php include "sidebar.php"; ?>
        </section>
    <!-- fin de la boucle -->
    <?php endwhile; ?> 
  <?php endif;?>


<?php get_footer(); ?>