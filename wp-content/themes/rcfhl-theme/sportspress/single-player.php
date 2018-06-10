<?php
/**
 * The template for displaying SportsPress player pages.
 *
 * @package rcfhl-theme
 */

get_header(); ?>

	<style>
		.site-footer, .header-main {
			display: none;
		}
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();
				$thisPlayerID = $post->ID ?>
				
				<?php echo do_shortcode("[player_statistics id='$thisPlayerID' align='none']"); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
