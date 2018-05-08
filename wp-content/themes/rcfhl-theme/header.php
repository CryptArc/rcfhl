<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rcfhl-theme
 */

?>
<!Doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			
			<!--! ^#Desktop Header -->
			<div class="desktop-header-wrap hidden-xs hidden-sm">
				<div class="desktop-header">
					
					<!--! -- ^#Top Menu -->
					<div class="header-top">
												
						<div class="homepage-logo">
							<img src="<?php the_field( 'header_logo', 'option' ); ?>" height="48" width="336" alt="DMA Logo"/>
						</div>
						
						<ul>
							<li class="search-button">
								<img src="/wp-content/themes/gotheme2015/images/search-icon-charcoal.svg" width="14" height="18" alt="search icon"/>
								<span>Search</span>
							</li>
							
							<?php if ( get_field( 'additional_header_link', 'option' ) ) { ?>
								<li>
									<a href="<?php the_field( 'additional_header_link', 'option' ); ?>">
										<?php the_field( 'additional_header_link_text', 'option' ); ?>
									</a>
								</li>
							<?php } ?>
							
							<li class="cta-button">
								<a href="<?php the_field( 'header_call_to_action_button_link', 'option' ); ?>" class="arrow-hover-animate-right">
									<span><?php the_field( 'header_call_to_action_button_text', 'option' ); ?></span>
									<span class="arrow"><img src="/wp-content/themes/gotheme2015/images/right-arrow-white.svg" alt="right icon"/></span>
								</a>
							</li>
							
						</ul>
					</div><!--header-top-->
					
					<!--! -- ^#Main Menu -->
					<div class="header-main">
						
						<a class="inner-logo" href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php the_field( 'header_logo', 'option' ); ?>" alt="DMA Logo"/>
						</a>
						
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</nav><!-- #site-navigation -->
						
						
					</div><!--header-main-->
					
				</div><!--desktop-header-->
			</div><!--desktop-header-wrap-->
			
		</header>
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rcfhl-theme' ); ?></a> -->

<!-- Old Header
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$rcfhl_theme_description = get_bloginfo( 'description', 'display' );
			if ( $rcfhl_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $rcfhl_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
<!--
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rcfhl-theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation
	</header><!-- #masthead -->


	<div id="content" class="site-content">
