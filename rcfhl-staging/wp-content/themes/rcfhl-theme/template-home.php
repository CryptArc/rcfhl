<?php
/**
 * Template Name: Homepage
 *
 * @package gotheme2015
 *
 * @author Sam Casey
 */

get_header(); ?>

	<div id="primary" class="">
		<main id="main" class="site-main homepage" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if( have_rows('hero') ): 
			
				while( have_rows('hero') ): the_row(); 
					
					// vars
					$heroHeadline = get_sub_field('hero_headline');
					$heroGraph = get_sub_field('hero_graph');
					$buttonOne = get_sub_field('button_one');
					$buttonTwo = get_sub_field('button_two');
					
					?>
				
					<div class="hero" style="background-image: url(<?php the_field('hero_bg'); ?>)">
						<div class="container">
							<div class="row hero-headline">
								<div class="col-xs-12 col-md-7">
									<h2><?php echo $heroHeadline ?></h2>
								</div>
							</div>
							<div class="row hero-graph">
								<div class="col-xs-12 col-md-7">
									<p><?php echo $heroGraph ?></p>
								</div>
							</div>
							<div class="row hero-buttons">
								<div class="col-xs-12 col-md-7">
									<button class="angle-btn hero-register-btn">
										<a href="<?php echo $buttonOne['button_one_link']; ?>"><?php echo $buttonOne['button_one_text']; ?></a>
									</button>
									<button class="d-none angle-btn hero-about-btn">
										<a href="<?php echo $buttonTwo['button_two_link']; ?>"><?php echo $buttonTwo['button_two_text']; ?></a>
									</button>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
	
			<?php endif; ?>
			
			<div class="benefits-wrap" style="background-image: url(<?php the_field('benefits_bg'); ?>)">
				<div class="container">
					<div class="row">

						<?php if ( have_rows( 'league_benefits' ) ) :  ?>
			
						    <?php while ( have_rows( 'league_benefits' ) ) : the_row(); ?>
						    
						        <div class="col-12 col-md-6 benefit">
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
				<?php if ( have_rows( 'image_slider' ) ) :  ?>
					<div class="home-image-slider">
				    <?php while ( have_rows( 'image_slider' ) ) : the_row(); ?>
				    
<!-- 					    <div class="slide" style="background: url(<?php the_sub_field( 'image' ); ?>) no-repeat center center; background-size: cover;"></div> -->
									<div><img class="" alt="test" src="<?php the_sub_field( 'image' ); ?>"></div>
				    
				    <?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			
			<div class="features-wrap">
				<div class="container">
					<div class="row">
						<h2><?php the_field('headline'); ?></h2>
					</div>
					<div class="row">
					<?php if ( have_rows( 'league_features' ) ) :  ?>
					    <?php while ( have_rows( 'league_features' ) ) : the_row(); ?>
					    
					    <div class="col-12 col-md-6 col-lg-4 feature">
						    <div class="row align-self-center">
							    <div class="col-3 col-md-6 offset-md-3 icon align-self-center">
									<img src="<?php the_sub_field( 'feature_icon' ); ?>">
							    </div>
						        <div class="col-9 col-md-12 wrap">
							        <h3><?php the_sub_field( 'feature_title' ); ?></h3>
									<p><?php the_sub_field( 'feature_supporting_copy' ); ?></p>
						        </div>
						    </div>
				        </div>		
					    
		    			<?php endwhile; ?>
	    			<?php endif; ?>
					</div>
				</div>
			</div>
			
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
			
			<div class="register-cta-wrap" style="background-image: url(<?php the_field('register_bg'); ?>)">
				<div class="container">
					<div class="row">
						<h2 class="col-12"><?php the_field( 'register_cta_headline') ?></h3>
					</div>
					<div class="row">
						<div class="col-12 cta-btn-wrap">
							
							<?php
		
							// vars
							$regButtonText = get_sub_field('button_text');
							$regButtonLink = get_sub_field('button_link');
							$regButton = get_field('register_button');	
							
							if( $regButton ): ?> 
							
							<button class="angle-btn register-cta-btn">
								<a href="<?php echo $regButton['button_link']; ?>"><?php echo $regButton['button_text']; ?></a>
							</button>
							
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>			
			
			<?php endwhile; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
