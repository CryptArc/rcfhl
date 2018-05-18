<?php
/**
 * Template Name: Homepage
 *
 * @package gotheme2015
 *
 * @author Marissa Solomon-Vickers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if( have_rows('hero') ): 
			
				while( have_rows('hero') ): the_row(); 
					
					// vars
					$heroHeadline = get_sub_field('hero_headline');
					$heroGraph = get_sub_field('hero_graph');
					$buttonOne = get_sub_field('button_one');
					$buttonTwo = get_sub_field('button_two');
					
					?>
				
					<div id="hero">
						<div class="container">
							<div class="row hero-headline">
								<div class="col-xs-12 col-md-7">
									<p><?php echo $heroHeadline ?></p>
								</div>
							</div>
							<div class="row hero-graph">
								<div class="col-xs-12 col-md-7">
									<p><?php echo $heroGraph ?></p>
								</div>
							</div>
							<div class="row hero-buttons">
								<div class="col-xs-12 col-md-7">
									<button>
										<a href="<?php echo $buttonOne['button_one_link']; ?>"><?php echo $buttonOne['button_one_text']; ?></a>
									</button>
									<button>
										<a href="<?php echo $buttonTwo['button_two_link']; ?>"><?php echo $buttonTwo['button_two_text']; ?></a>
									</button>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
	
			<?php endif; ?>
			
			<div class="benefits-wrap">
				<div class="container">
					<div class="row">

						<?php if ( have_rows( 'league_benefits' ) ) :  ?>
			
						    <?php while ( have_rows( 'league_benefits' ) ) : the_row(); ?>
						    
						        <div class="col-12 col-md-6 product-type">
								    <div class="row align-self-center">
									    <div class="col-12 col-lg-4 image align-self-center">
											<img src="<?php the_sub_field( 'benefit_icon' ); ?>">
									    </div>
								        <div class="col-12 col-lg-8 wrap">
									        <h3><?php the_sub_field( 'benefit_title' ); ?></h3>
											<p><?php the_sub_field( 'benefit_graph' ); ?></p>
								        </div>
								    </div>
						        </div>					
								
							<?php endwhile; ?>

						<?php endif; ?>
	
					</div><!-- #row -->
				</div><!-- #container -->
			</div>
			
			<div class="image-slider-wrap">
				<div class="container">
					<div class="row">
						<?php if ( have_rows( 'image_slider' ) ) :  ?>
							<div class="home-image-slider">
						    <?php while ( have_rows( 'image_slider' ) ) : the_row(); ?>
						    
							    <div class="slide" style="background: url(<?php the_sub_field( 'image' ); ?>) no-repeat center center; background-size: cover;"></div>
						    
						    <?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
