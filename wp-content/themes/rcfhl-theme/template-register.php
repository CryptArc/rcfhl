<?php
/**
 * Template Name: Register
 *
 * @package gotheme2015
 *
 * @author Sam Casey
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="container">
				<div class="row form-wrap">
					<div class="col-xs-12 col-md-8 col-md-offset-2 contact-content-cols wys">
						<?php gravity_form(2, false, false, false, '', true, 12); ?>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>