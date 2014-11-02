<?php

/*
   Template Name: Home Page
 */

get_header();  ?>

<div class="main">

  <div class="hero">
    <div class="container">
      <div class="form-booking">
	<form>
	  <h3>Book Now</h3>
	  <input type="text" name="firstname" value="First Name"><br>
	  <input type="text" name="lastname" value="Last Name">
	  <input type="date" name="checkin" value="Checkin Date">
	  <input type="date" name="checkout" value="Checkout Date">
	  <!--       <input type="" name="roomtype" value="Select Room Type"> -->
	  <input type="number" min="1" max="10" name="roomnumber" value="1">
	  <input type="submit" value="Check Availability" class="submit"> 
	</form>
      </div> <!-- .form-booking -->
    </div> <!-- /.container -->
  </div> <!-- .hero -->

  <div class="container">
    <div class="wrapper clearfix">
      <div class="front-page-rooms">
	<img src="" alt="Image 1">
      </div>
      <div class="front-page-rooms">
	<img src="" alt="Image 1">
      </div>
      <div class="front-page-rooms">
	<img src="" alt="Image 1">
      </div> <!-- .wrapper -->
    </div>
    
    <div class="content-front">
      <?php get_template_part( 'loop', 'home' ); ?>
    </div> <!-- /.content-front -->


  </div>

</div> <!-- /.main -->

<?php get_footer(); ?>
