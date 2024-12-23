<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

	
		
<div class="not-found-holder">
	<div class="error-404 not-found default-max-width text-center">
		<div class="page-content">
			<h1>404</h1>
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
			
			<a href="/" class="elementskit-btn  whitespace--normal">Back to Home</a>
			
		</div><!-- .page-content -->
	</div><!-- .error-404 -->
</div>
	


<?php
get_footer();
