<?php

/*
   Template Name: Blog Page
 */

get_header();  ?>

<div class="main">
  <div class="container-2">
    
    <div class="content">
      <?php get_template_part( 'loop', 'aryastark' ); ?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- .container-2 -->
</div> <!-- /.main -->

<?php get_footer(); ?>
