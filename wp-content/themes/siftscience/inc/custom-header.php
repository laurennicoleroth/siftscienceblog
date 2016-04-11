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
		'default-image'          => get_template_directory_uri() . '/images/siftscience-default-header.jpg',
		'width'                  => 1440,
		'height'                 => 450,
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
	$header_image = get_header_image();

	// Fallback to default image
	if( ! $header_image ){
		$header_image = get_template_directory_uri() . '/images/siftscience-default-header.jpg';
	}

	// Header image on page and single page is defined by featured image
	if ( ( is_singular() || is_page() ) && ! is_front_page() ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
		#page .page-header .background{
			background: url( <?php echo esc_url( $header_image ); ?> ) no-repeat center center;
			background-size: cover;
		}
	</style>
	<?php
}
endif; // siftscience_header_style