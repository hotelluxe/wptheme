<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
  </head>


  <body <?php body_class(); ?>>

    <header class="clearfix">
      <div class="container clearfix">
	<div class="logo">
	  <h1>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
            </a>
	  </h1>
	  <h2>
            <?php bloginfo( 'description' ); ?>
	  </h2>

	</div>
	<?php wp_nav_menu( array(
		'container' => false,
		'menu_id' => 'menu-header-menu',
		'theme_location' => 'primary'
	      )); ?>

	<ul class="xoxo">
	  <?php  dynamic_sidebar( 'header-widget-area' ); ?>
	</ul>

      </div> <!-- /.container -->
    </header><!--/.header-->

