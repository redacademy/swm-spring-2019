<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<p class="site-description"><?php bloginfo('description'); ?></p>
			</div><!-- .site-branding -->

			<article class="nav-logo">
				<!-- Need to change image with starts with me logo when we get image from Mike -->
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri() . '/images/temp.png'; ?>" class="logo" alt="Starts With Me Inc Logo"> </a>
			</article>


			<nav id="site-navigation" class="main-navigation" role="navigation">

				<article class="nav-logo">

						<!-- Need to change image with starts with me logo when we get image from Mike -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img  src= "<?php echo get_template_directory_uri() . '/images/SWM_RGB.png'; ?>" class="logo" alt="Starts With Me Inc Logo" > </a>
				</article>	

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				
				<section class="searchsection">
					<?php get_search_form(); ?>
				</section>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->


		<div id="content" class="site-content">