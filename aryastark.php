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
	<img src="<?php bloginfo('template_url')?>/images/room1.jpg" alt="Penthouse Suite">
      </div>
      <div class="front-page-rooms">
	<img src="<?php bloginfo('template_url')?>/images/room2.jpg" alt="Deluxe Suite">
      </div>
      <div class="front-page-rooms">
	<img src="<?php bloginfo('template_url')?>/images/room3.jpg" alt="Single Suite">
      </div> <!-- .wrapper -->
    </div>
    
    <div class="content-front home-float">
      <?php get_template_part( 'loop', 'home' ); ?>
    </div> <!-- /.content-front -->
    <div class="content-front-2 home-float">
      <img src="<?php bloginfo('template_url')?>/images/home.jpg" alt="Penthouse Suite">
    </div> <!-- /.content-front -->
    <div class="content-front-3 home-float">
      <h3>Hotel Overview</h3>
      <ul>
        <li>125 Luxury Suites</li>
        <li>5 Star Restaurant</li>
        <li>Continental Breakfast</li>
        <li>Infinity Pool</li>
        <li>Ocean Front View</li>
        <li>24 hour Concierge</li>
        <li>125 Luxury Suites</li>
        <li>Free Airport Shuttle Service</li>
      </ul>
    </div> <!-- /.content-front -->


  </div>

</div> <!-- /.main -->

<?php get_footer(); ?>
