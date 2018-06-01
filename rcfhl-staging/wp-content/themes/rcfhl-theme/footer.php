<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rcfhl-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" style="background-image: url(<?php the_field('footer_bg', 'options'); ?>)">
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4 logo-social-wrap">
						<div class="row">
							<div class="col-12 logo-container">
								<img src="<?php the_field( 'footer_logo', 'option' );?>">
							</div>
							<div class="col-12 social-container">
								
								<?php if ( have_rows( 'social_media', 'option' ) ) :  ?>
								    <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
								    
								    <a href="<?php the_sub_field( 'social_link' ); ?>">
										<img class="social-icon" src="<?php the_sub_field( 'social_icon' ); ?>">
								    </a>
								    
								    <?php endwhile; ?>
				    			<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 contact-info">
						<div class="row">
							
							<?php

							// vars
							$rcfhlInfo = get_field('rcfhl_info', 'options');
							
							if( $rcfhlInfo ): ?>
							
							<div class="col-12 rcfhl-info">
								<h3><?php echo $rcfhlInfo['title']; ?></h3>
								<p><?php echo $rcfhlInfo['phone']; ?></p>
								<p><?php echo $rcfhlInfo['email']; ?></p>
								<a href="<?php echo $rcfhlInfo['contact']['contact_link']; ?>"><?php echo $rcfhlInfo['contact']['contact_text']; ?></a>							
							</div>
							
							<?php endif; ?>
							
<!--
							<?php

							// vars
							$gsInfo = get_field('great_skate_info', 'options');
							
							if( $gsInfo ): ?>
							
							<div class="col-12 great-skate-info">
								<h3><?php echo $gsInfo['title']; ?></h3>
								<p><?php echo $gsInfo['address']; ?></p>
								<p><?php echo $gsInfo['phone']; ?></p>
								<a href="<?php echo $gsInfo['website']['website_link']; ?>"><?php echo $gsInfo['website']['website_text']; ?></a>
							</div>
							
							<?php endif; ?>
-->
						</div>
					</div>
					<div class="col-12 col-md-4">
						
						<?php

							// vars
							$gsInfo = get_field('great_skate_info', 'options');
							
							if( $gsInfo ): ?>
							
							<div class="col-12 great-skate-info">
								<h3><?php echo $gsInfo['title']; ?></h3>
								<p><?php echo $gsInfo['address']; ?></p>
								<p><?php echo $gsInfo['phone']; ?></p>
								<a href="<?php echo $gsInfo['website']['website_link']; ?>"><?php echo $gsInfo['website']['website_text']; ?></a>
							</div>
							
							<?php endif; ?>
							
					</div>
					<div class="d-none col-md-2 about-nav">
						<h3><?php the_field( 'about_nav_title', 'option' ); ?></h3>
						<?php wp_nav_menu( array( 
							'theme_location' => 'about_footer_nav',
							'container' => false,
							 ) ); 
						 ?>
					</div>
					<div class="d-none col-md-2 useful-link-nav">
						<h3><?php the_field( 'useful_link_nav_title', 'option' ); ?></h3>
						<?php wp_nav_menu( array( 
							'theme_location' => 'useful_link_nav',
							'container' => false,
							 ) ); 
						 ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 legal-bar">
						<p>© 2018 River City Floor Hockey LLC  |  <a href="<?php the_field('terms', 'options'); ?>">Terms of Use</a>  |  <a href="<?php the_field('privacy', 'options'); ?>">Privacy</a></p>
					</div>
				</div>
			</div>
		</div>	
					
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
