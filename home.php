<?php

/*
	Template Name: Front Page
*/

get_header();  ?>

<div class="main">

<div class="hero">
  <div class="container">
    <p>This is the hero image</p>
  </div> <!-- /.container -->
</div> <!-- .hero -->

<div class="wrapper">
  <div class="front-page-rooms clearfix">
    <img src="" alt="Image 1">
  </div>
  <div class="front-page-rooms">
    <img src="" alt="Image 1">
  </div>
  <div class="front-page-rooms">
    <img src="" alt="Image 1">
  </div>
  
  <div class="content">

<?php
$content = get_the_content('Read more');
print $content;
?>

    </div> <!-- /,content -->


</div>

</div> <!-- /.main -->

<?php get_footer(); ?>