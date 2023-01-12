<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boom_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>



<aside id="secondary" class="widget-area col col-lg-4 bg-info "> <!--it contain the side items-->

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	
  

	
</aside><!-- #secondary -->
