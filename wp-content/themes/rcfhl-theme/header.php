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
			
			<!--! ^#Mobile Header -->
			<div class="mobile-header-wrap d-md-none d-lg-none">
				<div class="mobile-header">
					
					<div class="logo-wrap">
						<a href="<?php echo esc_url( home_url() ); ?>">
						<img class="img-responsive" src="<?php the_field( 'header_logo', 'option' ); ?>" alt="DMA logo">
						</a>
					</div>
					
					<div class="mobile-hamburger-wrap">
						<i class="material-icons">
							menu
						</i>
					</div>
					
				</div><!--mobile-header-->
				
				<!--! ^#Mobile Header Overlay -->
				<div class="mobile-header-overlay">
					<div class="info-wrap">
						<div class="logo-wrap">
							<a href="<?php echo esc_url( home_url() ); ?>">
								<img class="img-responsive" src="<?php the_field( 'header_logo', 'option' ); ?>" alt="RCFHL Logo">
							</a>
						</div>
						
						<div class="mobile-overlay-close-wrap">
							<i class="material-icons">close</i>
						</div>
						
						<nav id="site-navigation" class="">
							<?php wp_nav_menu( array( 
								'theme_location' => 'main_nav',
								'container' => false,
								 ) ); 
							 ?>
						</nav><!-- #site-navigation -->
						
						<div class="menu-header-menu-container main-navigation search-wrap">
							<ul>
								<li class="search-button">
<!-- 									<img src="/wp-content/themes/gotheme2015/images/search-icon-charcoal.svg" width="14" height="18" alt="search icon"/> -->
									<span>Search</span>
								</li>
							</ul>
						</div>
					</div>
				</div><!--mobile-header-overlay-->
			</div>
			
			<!--! ^#Desktop Header -->
			<div class="desktop-header-wrap d-none d-md-block">
				<div class="desktop-header">
					
					<!--! -- ^#Top Menu -->
					<div class="header-top fluid-container">
<!--												
						<div class="homepage-logo">
							<img src="<?php the_field( 'header_logo', 'option' ); ?>" height="48" width="336" alt="DMA Logo"/>
						</div>

						<ul>
							<li class="search-button">
								<img src="/wp-content/themes/gotheme2015/images/search-icon-charcoal.svg" width="14" height="18" alt="search icon"/>
								<span>Search</span>
							</li>


							<?php if ( get_field( 'subnav_links', 'option' ) ) { ?>
								<li>
									<a href="<?php the_field( 'subnav_link', 'option' ); ?>">
										<?php the_field( 'subnav_link_text', 'option' ); ?>
									</a>
								</li>
							<?php } ?>
						</ul>
-->
					<!--! -- ^#Sub Nav -->
						<div class="row">
							<div id="site-sub-nav" class="sub-nav col-xs-12">
								<?php wp_nav_menu( array( 
									'theme_location' => 'sub_nav',
									'container' => false,
									 ) ); 
								 ?>
							</div><!-- #site-subnav -->
						</div>
					</div><!--header-top-->
					
					<!--! -- ^#Main Menu -->
					<div class="header-main fluid-container">
						<div class="row">
							<div class="col-xs-4 col-md-4">
								<a href="<?php echo esc_url( home_url() ); ?>">
									<img src="<?php the_field( 'header_logo', 'option' ); ?>" alt="RCFHL Logo"/>
								</a>
							</div>
							<nav id="site-navigation" class="col-xs-8 col-md-8" role="navigation">
								<?php wp_nav_menu( array( 
									'theme_location' => 'main_nav',
									'container' => false,
									'menu_class' => 'main-nav-menu'
									 ) ); 
								 ?>
							</nav><!-- #site-navigation -->
						</div>
						
						
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
