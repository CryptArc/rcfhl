<?php
/**
 * The template for displaying SportsPress team pages.
 *
 * @package Rookie
 */

get_header(); ?>

	<style>
		.site-title, .site-description, .sp-template-team-logo {
			display: none;
		}
	</style>

	<div id="primary" class="content-area content-area-<?php echo rookie_get_sidebar_setting(); ?>-sidebar">
		<main id="main" class="site-main" role="main">

			<?php if ( is_archive() && have_posts() ) : ?>
				<header class="page-header">
 					<h1 class="page-title"><?php single_cat_title(); ?></h1>
					<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
				</header><!-- .page-header -->
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>


				<?php
					$thisTeamID = $post->ID;
					
					$args = array(
						'post_type' => 'sp_player',
						'meta_query' => array(
							// meta query takes an array of arrays, watch out for this!
							array(
								'key'   => 'sp_team',
								'value' => array($thisTeamID)
							)
						),
						'posts_per_page' => '-1'
					);
					$posts = get_posts($args);
					
					foreach($posts as $post){
						the_title();
// 						print_r(get_post_meta(the_id(), $key = 'sp_statistics'));
						print_r(get_post_custom_values('sp_statistics'));
// 						print_r($post->id);
// 						print_r($post);
					}
				?>
				
				<?php the_content(); ?>
				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
