<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boom_Starter
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'boom-starter-lite' ); ?></a>

	<header id="masthead" class="site-header">
   <!-- .site-branding -->
  <!--within container  close container-->


 <!--start navber-->
  <nav class="navbar navbar-expand-lg navbar-light bg-danger text-uppercase ">
			<div class="container">
 
	
			<div class="container"> <!--add container for header part-->
<!--start site -->
 <div class="contain">
 <div class="site-branding"> 

<?php
the_custom_logo();
if ( is_front_page() && is_home() ) :
	?>
	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php
else :
	?>
	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	<?php
endif;
$boom_starter_lite_description = get_bloginfo( 'description', 'display' );
if ( $boom_starter_lite_description || is_customize_preview() ) :
	?>
	<p class="site-description"><?php echo $boom_starter_lite_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<?php endif; ?>

</div>

</div>
<!-- #end site-navigation -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>


</button>


<div class="collapse navbar-collapse py-4" id="navbarSupportedContent" >	

			<?php /* Primary navigation */ 
               wp_nav_menu( array(
               'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                 'menu_class' => 'nav',
              //Process nav menu using our custom nav walker 
                'walker' => new wp_bootstrap_navwalker())
               );

			get_search_form();
			
             ?>
			</div>
		</nav> <!--close nav ber-->
	</header><!-- #masthead -->
	<!--header and navber part end-->

	<!--start main part-->

<div class="container gy-5">
	<div class="row gx-6 p-2  "><!--open row -->