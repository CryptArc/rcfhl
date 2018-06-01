<?php
/**
 * Template Name: Register
 *
 * @package gotheme2015
 *
 * @author Sam Casey
 */

get_header(); ?>

	<div id="primary" class="">
		<main id="main" class="site-main register" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="register-hero" style="background-image: url(<?php the_field('hero_bg'); ?>)">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-tiles-wrap">
				<div class="container">
					<div class="row">
						
						<?php while ( have_rows( 'register_forms' ) ) : the_row(); ?>
						
						<div class="col-12 col-lg-4 tile">
							<a href="<?php the_sub_field( 'form_tile_link' ); ?>">
								<div class="tile-container" style="background-image: url(<?php the_sub_field('form_tile_bg'); ?>)">
									<p class="form-support-text"><?php the_sub_field( 'form_tile_support_text' ); ?></p>
									<p class="form-title"><?php the_sub_field( 'form_tile_title' ); ?></p>
								</div>
							</a>
						</div>
						
						<?php endwhile; ?>
						
					</div>
				</div>
			</div>
			
			
<!--
			<div class="image-slider-wrap">
				<?php if ( have_rows( 'image_slider' ) ) :  ?>
					<div class="home-image-slider">
				    <?php while ( have_rows( 'image_slider' ) ) : the_row(); ?>
				    
									<div><img class="" alt="test" src="<?php the_sub_field( 'image' ); ?>"></div>
				    
				    <?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
-->			
						
			<div class="pricing-wrap">
				<div class="container">
					<div class="row">
						<h2 class="col-12"><?php the_field( 'pricing_headline', 'option' );?></h2>
					</div>
					<div class="row">
						<div class="col-12 col-md-4 price">
							<div class="row">
								<p class="amount"><?php the_field( 'per_team_price', 'option' );?></p>
							</div>
							<div class="row">
								<p class="amount-description"><?php the_field( 'per_team_copy', 'option' );?></p>
							</div>
						</div>
						<div class="col-12 col-md-4 price">
							<div class="row">
								<p class="amount"><?php the_field( 'additional_player_price', 'option' );?></p>
							</div>
							<div class="row">
								<p class="amount-description"><?php the_field( 'additional_player_copy', 'option' );?></p>
							</div>
						</div>
						<div class="col-12 col-md-4 price">
							<div class="row">
								<p class="amount"><?php the_field( 'team_max_price', 'option' );?></p>
							</div>
							<div class="row">
								<p class="amount-description"><?php the_field( 'team_max_copy', 'option' );?></p>
							</div>
						</div>
					</div>
				</div>
			</div>		
			
			<?php endwhile; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
