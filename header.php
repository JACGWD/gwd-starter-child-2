<?php
// Add this to all your php files for added security

if (!defined('ABSPATH'))
	exit; // Exit if accessed directly.

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />


<!-- **************** GET HEADER********************* -->

  <?php wp_head(); ?>

<!--**************** END HEADER*********************** -->

</head>

<body <?php body_class(); ?>>

<div class="main-container">
<!---  CONTAINER DIV OPENS HERE ----->
  
<!--- HEADER STARTS HERE ----->
<header>

<?php get_search_form(); ?>

<nav class="primary-navigation">
<button aria-expanded="false" aria-controls="menu" class="hide-text">Menu</button>

<?php
  wp_nav_menu(array(
	'menu_class'	  	=> 'primary-menu',
	'theme_location' 	=> 'primary-menu',
	'menu_id'	    		=> 'menu',
  'container'       => 'div',
	'container_id'		=> 'menu-container',
  'menu_aria_label' => 'hidden'
));
?>
</nav>


<div id="branding">
    <?php 
       if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
    ?>

    

    <div class="site-title">
        <a href="<?php echo get_option('home'); ?>">
          <?php bloginfo('name'); ?>
        </a>
    </div>

    <div class="description">
        <a href="<?php echo get_option('home'); ?>">
          <?php bloginfo('description'); ?>
          <?php // This is the WP site tagline, not the meta description tag ?>
        </a>
    </div>
    <!-- END DESCRIPTION -->

  </div>
  <!-- END BRANDING -->
  
    

</header> 
<!--- HEADER ENDS HERE -----> 


