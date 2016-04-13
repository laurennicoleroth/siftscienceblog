<?php
/**
 * Set up the WordPress core custom header feature.
 *
 * @uses siftscience_header_style()
 * @uses siftscience_admin_header_style()
 * @uses siftscience_admin_header_image()
 */
function siftscience_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'siftscience_custom_header_args', array(
		'wp-head-callback'       => 'siftscience_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'siftscience_custom_header_setup' );

if ( ! function_exists( 'siftscience_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see siftscience_custom_header_setup().
 */
function siftscience_header_style() {


	// Header image on page and single page is defined by featured image
	if ( ( is_singular() || is_page() ) && ! is_front_page() ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<?php
}
endif; // siftscience_header_style