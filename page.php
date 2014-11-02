<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      
      <?php if (have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <?php endif; ?>
    </div> <!-- /,content -->
    
    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
