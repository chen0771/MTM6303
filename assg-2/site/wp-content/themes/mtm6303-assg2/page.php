<?php
/**
 * page template for the theme
 *
 * @package WordPress
 * @subpackage MTM6303_Assignment
 * @since MTM6303 Assignment 1.0
 */
?>
<?php get_header();?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();?>