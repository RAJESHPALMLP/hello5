<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boom_Starter
 */
$title= get_field('page_title');
$description = get_field('description');
echo $title;
?>


</div><!--close row --> 
</div>  <!--open in header and close in footer-->

	<footer id="colophon" class="site-footer text-center bg-secondary  py-4">
		<div class="site-info container text-white fs-1">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'boom-starter-lite' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( ' %s', 'boom-starter-lite' ), '' );
				?>
			</a>
			
			<span class="sep" ></span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'boom-starter-lite' ), 'boom-starter-lite', '<a href="https:www.ibsofts">iB Softs</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!--open in here close in container-->

</div><!--open in here close in footer-->

</body>
</html>
