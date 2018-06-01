<?php
/**
 * Template Name: Register – Form
 *
 * @package gotheme2015
 *
 * @author Sam Casey
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main register-form" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="register-form-hero">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3 form-wrap">
						<?php $regFormID = get_field('registration_form_id'); ?>
						<?php gravity_form( $regFormID['id'], true, true, false, '', true, 1 ); ?>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>