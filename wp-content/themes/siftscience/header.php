<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Siftscience
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'siftscience' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="">
			<div class="site-branding">
				<a id="site-logo-link" href="/siftscience/"><svg></svg></a>
				<?php
					if( function_exists( 'jetpack_the_site_logo' ) ){
						jetpack_the_site_logo();
					}

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>

					<?php endif;
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle dashicons dashicons-menu"><?php _e( 'Primary Menu', 'siftscience' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
			<nav id="user-links" role="user-management">
				<?php wp_nav_menu( array( 'theme_location' => 'user' ) ); ?>
			</nav>
		</div>
	</header><!-- #masthead -->
	<div class="page-header">
		<div class="wrap">
			<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
							<p><?php bloginfo('description'); ?> </p>
							<img alt="Sift Scientist" src="http://localhost:8888/siftscience/wp-content/themes/siftscience/images/SiftScientist.png">
					<?php else : ?>
						<h1><?php wp_title(); ?></h1>
					<?php endif;
			?>
		 </div>
</div>


	<div id="content" class="site-content wrap">