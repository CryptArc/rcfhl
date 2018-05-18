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
			
				<!--! ^# Hero -->
				<?php
					$rows = get_field( 'background_images' );
					$row_count = count( $rows );
					$i = rand( 0, $row_count - 1 );
					$back_image = $rows[ $i ];
				?>

				<div class="homepage-hero">
					
					<div class="gradient"></div>
					<div class="underlay" style="background: url( <?php echo esc_url( $back_image['the_image'] ); ?> ) no-repeat center; background-size: cover;"></div>
					<div class="pattern-img">
						<?php get_template_part( 'images/pattern', 'building' ); ?>
					</div>
					
					<div class="container text-wrapper">
						<div class="row">
							<div class="col-xs-12 col-sm-10 col-sm-offset-1">
								
								<div class="slide-element">
									<h1>
										<div class="grey-text">
										<?php the_field( 'grey_text_1' ); ?>
										</div><!--grey-text-->
										<div class="teal-text">
											<?php the_field( 'teal_text_1' ); ?>
										</div>
									</h1>
								</div>
								
								<div class="slide-element">
									<h1>
										<div class="grey-text">
											<?php the_field( 'grey_text_2' ); ?>
										</div><!--grey-text-->
										<div class="teal-text">
											<?php the_field( 'teal_text_2' ); ?>
										</div>
									</h1>
								</div>
								
								<div class="slide-element">
									<h2>
										<div class="grey-text">
											<?php the_field( 'grey_text_3' ); ?>
										</div><!--grey-text-->
										
										<div class="typerText">
											<div id="typed-strings" class="hidden xs hidden-sm hidden-md hidden-lg">
												<?php while ( have_rows( 'typer_words' ) ) : the_row(); ?>
														<p><?php the_sub_field( 'the_word' ); ?></p>
												<?php endwhile; ?>
											</div>
											<span id="typed"></span>
										</div><!--typer-text-->
									</h2>
								</div>
								
							</div><!--cols-->
						</div><!--row-->
					</div><!--container-->
					
					<div class="image-info hidden-xs">
						<div class="top"><?php echo esc_attr( $back_image['image_title'] ); ?></div>
						<div class="bottom"><?php echo esc_attr( $back_image['image_location'] ); ?></div>
					</div>
					
					<div class="home-hero-down-arrow hidden-xs"><img class="bounce" src="/wp-content/themes/gotheme2015/images/icn_homepage_hero_down-arrow.svg" width="21" height="14" alt="down arrow" /></div>
					
				</div><!--homepage-hero-->
				<div id="end-hero-anchor"></div>
				
				<!--! ^#Intro Text -->
				<div class="home-intro-text">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
								<?php the_content(); ?>
								<a href="<?php the_field( 'red_link_url' ); ?>" class="arrow-hover-animate-right">
									<?php the_field( 'red_link_text' ); ?>
									<span class="arrow"><img src="/wp-content/themes/gotheme2015/images/right-arrow-red.svg" alt="right arrow" width="26" height="20"/></span>
								</a>
							</div><!--cols-->
						</div><!--row-->
					</div><!--container-->
				</div><!--home-intro-text-->
				
				<!--! ^#Three Icon Text Section -->
				<?php if ( have_rows( 'icon_and_text_section' ) ) { ?>
				<div class="home-three-icon-section">
					<div class="container">
						<div class="row home-icon-slider">
							<div class="col-xs-12 col-sm-12 section-cols">
								
								<div class="inner">
									<div class="icon" style="background: url( <?php the_field( 'benefits_logo' ); ?> ) no-repeat center; background-size: contain;"></div>
									<div class="line-top"></div>
									<div class="line-left"></div>
									
									<?php while ( have_rows( 'icon_and_text_section' ) ) : the_row(); ?>
											<div class="section-single">
												<h2><?php the_sub_field( 'the_description' ); ?></h2>
												<div class="sep"></div>
											</div><!--section-single-->
									<?php endwhile; ?>
								</div><!--inner-->
								
							</div><!--cols-->
						</div><!--row-->
					</div><!--container-->
				</div><!--home-three-icon-section-->
				<?php } ?>
							
				<div class="wrapper-class parallax-wrapper ind-serv-parallax">
					
					<div class="parallax-section" data-scale="3" data-position="0%">
						<img src="/wp-content/themes/gotheme2015/images/Triangle-Pattern.svg" alt="pattern" />
					</div>
					
					<!--! ^#Service & Industry Slider Toggle Buttons -->
					<div class="ser-ind-slider-toggle">
						<div class="ser-ind-toggle-button active" data-slider=".servicesSliderWrap">Services</div>
						<div class="ser-ind-toggle-button" data-slider=".industriesSliderWrap">Industries</div>
					</div><!--ser-ind-slider-toggle-->
					
					<div class="ind-and-serv-slider-wrap">
						
						<!--! ^#Services Slider -->
						<?php $args = array(
									'post_type'      => 'service',
									'posts_per_page' => 200,
									'orderby'        => 'name',
									'post_status'    => 'publish',
							);
							$in_posts = get_posts( $args );
						?>
						
						<?php if ( $in_posts ) { ?>
						<div class="servicesSliderWrap ser-ind-slider active">
							<div class="servicesSlider">
								<?php $i = 0; ?>
								<?php foreach ( $in_posts as $post ) : setup_postdata( $post ); ?>
									<?php $i++;
									$add = '';
									if ( 1 === $i ) { $add = 'active'; }
									?>
									<div class="inPostSlide <?php echo esc_attr( $add ); ?>">
										
										<div class="width-wrap">
										
											<?php $in_img = get_field( 'homepage_slider_image' ); ?>
											<?php if ( ! $in_img || '' === $in_img ) { $in_img = get_field( 'default_homepage_ser_slider_image', 'option' ); } ?>
											
											<div class="inPostImg" style="background: url(<?php echo esc_attr( $in_img ); ?>) no-repeat center; background-size: cover;">
												<div class="overlay"></div>
											</div>
											
											<div class="hovers">
												<?php $icon = get_field( 'the_icon' );
												if ( ! $icon || '' === $icon ) { $icon = get_field( 'default_service_icon', 'option' ); } ?>
												<div class="icon" data-icon-num="<?php echo esc_attr( $i ); ?>">
													<img class="style-svg" src="<?php echo esc_url( $icon ); ?>" alt="icon" />
												</div>
												<a class="learnMoreBox" href="<?php the_permalink(); ?>">
													<div class="titler"><?php the_title(); ?></div>
													<div class="learnText"><span>Learn More</span><img src="/wp-content/themes/gotheme2015/images/right-arrow-grey.svg" alt="right arrow"/></div>
												</a>
											</div><!--hovers-->
										</div><!--width-wrap-->
										
									</div><!--inPostSlide-->
								<?php endforeach;
wp_reset_postdata(); ?>
							</div><!--servicesSlider-->
							
						</div><!--servicesSliderWrap-->
						<?php } //end if service posts ?>
						
						<!--! ^#Industries Slider -->
						<?php $args = array(
										'post_type'      => 'industry',
										'posts_per_page' => 200,
										'orderby'        => 'name',
										'post_status'    => 'publish',
							);
							$in_posts = get_posts( $args );
						?>
						
						<?php if ( $in_posts ) { ?>
						<div class="industriesSliderWrap ser-ind-slider">
							<div class="industriesSlider">
								<?php $i = 0; ?>
								<?php foreach ( $in_posts as $post ) : setup_postdata( $post ); ?>
									<?php $i++;
									$add = '';
									if ( 1 === $i ) { $add = 'active'; }
									?>
									<div class="inPostSlide <?php echo esc_attr( $add ); ?>">
										
										<div class="width-wrap">
										
											<?php $in_img = get_field( 'homepage_slider_image' ); ?>
											<?php if ( ! $in_img || '' === $in_img ) { $in_img = get_field( 'default_homepage_ind_slider_image', 'option' ); } ?>
											
											<div class="inPostImg" style="background: url(<?php echo esc_attr( $in_img ); ?>) no-repeat center; background-size: cover;">
												<div class="overlay"></div>
											</div>
											
											<div class="hovers">
												<?php $icon = get_field( 'the_icon' );
												if ( ! $icon || '' === $icon ) { $icon = get_field( 'default_industry_icon', 'option' ); } ?>
												<div class="icon" data-icon-num="<?php echo esc_attr( $i ); ?>">
													<img class="style-svg" src="<?php echo esc_url( $icon ); ?>" alt="icon"/>
												</div>
												<a class="learnMoreBox" href="<?php the_permalink(); ?>">
													<div class="titler"><?php the_title(); ?></div>
													<div class="learnText"><span>Learn More</span><img src="/wp-content/themes/gotheme2015/images/right-arrow-grey.svg" alt="right arrow" /></div>
												</a>
											</div><!--hovers-->
										</div><!--width-wrap-->
										
									</div><!--inPostSlide-->
								<?php endforeach;
wp_reset_postdata(); ?>
							</div><!--industriesSlider-->
							
						</div><!--industriesSliderWrap-->
						<?php } //end if industry posts ?>
						
					</div><!--ind-and-serv-slider-wrap-->
					
					<!--! ^#Case Study Slider -->
					<?php if ( have_rows( 'featured_case_studies' ) ) { ?>
					<div class="home-case-studies">
						<div id="number-trigger-line"></div>
						
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-10 col-sm-offset-1 case-study-cols">
						
									<div class="case-study-slider-wrap">
										
										<div class="case-study-slider">
											<?php $add = 'id=initial-number';
											$i = 1; ?>
											<?php while ( have_rows( 'featured_case_studies' ) ) : the_row(); ?>
											<div class="case-study-slide">
											
												<div class="number-img" <?php echo esc_attr( $add ); ?> >
													<?php if ( 1 === $i ) { get_template_part( 'images/animating', 'one' );
} else if ( 2 === $i ) { echo '<img src="/wp-content/themes/gotheme2015/images/icn_home_case-studies-02.svg" alt="02"/>';
} else { echo '<img src="/wp-content/themes/gotheme2015/images/icn_home_case-studies-03.svg" alt="03"/>'; }
													?>
												</div>
												
												<?php $post = get_sub_field( 'the_case_study' );
													setup_postdata( $post );
													$img = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
												?>
												<div class="featured-image">
													<div class="the-image" style="background: url( <?php echo esc_url( $img ); ?> ) no-repeat center; background-size: cover;"></div>
													<div class="timer-filling-line"></div>
												</div>
												<div class="title"><?php the_title(); ?></div>
												<div class="excerpt"><?php the_excerpt(); ?></div>
												<div class="dma-button-wrap">
													<a class="dma-button read-more" href="<?php the_permalink(); ?>">Read More</a>
												</div>
												
												<?php wp_reset_postdata(); ?>
											
												<?php $i++;
												$add = ''; ?>
											</div><!--case-study-slide-->
											<?php endwhile; ?>
										</div><!--case-study-slider-->
										
										<div class="numbers-wrapper">
											<div class="numbers">
											<?php $number_buttons = array( '01', '02', '03' ); ?>
											<?php $i = 0;
											$add = 'active';
											while ( have_rows( 'featured_case_studies' ) ) : the_row(); ?>
												<div class="number-button <?php echo esc_attr( $add ); ?>" data-slide-num="<?php echo esc_attr( $i ); ?>">
													<?php echo esc_attr( $number_buttons[ $i ] ); ?>
												</div>
												<?php $i++;
												$add = ''; ?>
											<?php endwhile; ?>
											</div><!--numbers-->
										</div><!--numbers-wrapper-->
										
									</div><!--case-study-slider-wrap-->
									
								</div><!--cols-->
							</div><!--row-->
						</div><!--container-->
									
					</div><!--home-case-studies-->
					<?php } ?>
					
				</div><!--wrapper-class-->
				
				<!--! ^#Testimonials -->
				<?php get_template_part( 'content', 'testimonials' ); ?>
				
				<!--! ^#Whitepaper Download -->
				<?php if ( get_field( 'does_this_page_have_a_white_paper_section' ) == true ) { ?>
				<div class="home-whitepaper-download parallax-wrapper">
					
					<div class="parallax-section back-image" data-scale="1" data-position="-10%">
						<img src="/wp-content/themes/gotheme2015/images/Triangle-Pattern.svg" alt="pattern" />
					</div>
					
					<div class="container">
						<div class="row">
							
							<div class="col-xs-12 col-sm-5 col-sm-push-7">
								<div class="accent-img-wrap parallax-section" data-scale="12" data-position="50px">
									<div class="overlay"></div>
									<div class="accent-image" style="background: url( <?php the_field( 'accent_image' ); ?> ) no-repeat center; background-size: cover;"></div>
								</div><!--accent-img-wrap-->
							</div><!--cols-->
							
							<div class="col-xs-12 col-sm-7 col-sm-pull-5">
								<div class="the_form">
									<div class="expand-border"></div>
									<?php $form_object = get_field( 'the_form' );
								    gravity_form_enqueue_scripts( $form_object['id'], true );
								    gravity_form( $form_object['id'], true, true, false, '', false );
							    	?>
								</div><!--the_form-->
							</div><!--cols-->
							
						</div><!--row-->
					</div><!--container-->
				</div><!--home-whitepaper-download-->
				<?php } ?>
						
			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
