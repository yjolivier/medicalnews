<aside class="col-sm-4">
  <?php 
  // Verify wether the sidebar is registed in functions.php
  if ( ! is_active_sidebar( 'widgets_sidebar' ) ) {
      return;
    }
  ?>

  <!-- dynamic sidebar -->
  <?php dynamic_sidebar( 'widgets_sidebar' ); ?>
</aside>
