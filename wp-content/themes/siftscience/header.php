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
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'siftscience' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="/" class="sift-brand">sift science</a>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<li><a href="#">one</a></li>
			<li><a href="#">two</a></li>
			<li><a href="#">three</a></li>
		</nav><!-- #site-navigation -->

		<nav id="utility-nav">
			<span class="console-login"></span><div class="veggieburger-wrap"><svg class="veggieburger"><rect y="0" width="24" height="4"></rect><rect y="8" width="24" height="4"></rect><rect y="16" width="24" height="4"></rect></svg></div>
		</nav><!--#utility-navigation>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
