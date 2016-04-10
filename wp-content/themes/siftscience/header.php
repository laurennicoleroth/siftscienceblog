<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SiftScience
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
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div id="site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
		</div><!-- .site-branding -->

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">

		<?php esc_html_e( 'Primary Menu', '_s' ); ?></button>

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		<?php wp_nav_menu( array( 'theme_location' => 'utility-menu' ) ); ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div id="banner">
		<div id="banner-container">
			<h1>Welcome To Sift Blog</h1>
			<p>Other stuff</p>
		</div>
	</div>