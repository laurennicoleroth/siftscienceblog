<?php
/**
 * Setting global variables for all theme options saved values
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_set_global' ) ) :
    function corporate_plus_set_global() {
        /*Getting saved values start*/
        $corporate_plus_saved_theme_options = corporate_plus_get_theme_options();
        $GLOBALS['corporate_plus_customizer_all_values'] = $corporate_plus_saved_theme_options;
        /*Getting saved values end*/
    }
endif;
add_action( 'corporate_plus_action_before_head', 'corporate_plus_set_global', 0 );

/**
 * Doctype Declaration
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_doctype' ) ) :
    function corporate_plus_doctype() {
        ?>
        <!DOCTYPE html><html <?php language_attributes(); ?>>
        <?php
    }
endif;
add_action( 'corporate_plus_action_before_head', 'corporate_plus_doctype', 10 );

/**
 * Code inside head tage but before wp_head funtion
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_before_wp_head' ) ) :

    function corporate_plus_before_wp_head() {
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php
    }
endif;
add_action( 'corporate_plus_action_before_wp_head', 'corporate_plus_before_wp_head', 10 );

/**
 * Add body class
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_body_class' ) ) :

    function corporate_plus_body_class( $corporate_plus_body_classes ) {
        global $corporate_plus_customizer_all_values;

        if ( 'no-image' == $corporate_plus_customizer_all_values['corporate-plus-blog-archive-layout'] ) {
            $corporate_plus_body_classes[] = 'blog-no-image';
        }
        $corporate_plus_body_classes[] = corporate_plus_sidebar_selection();

        return $corporate_plus_body_classes;

    }
endif;
add_action( 'body_class', 'corporate_plus_body_class', 10, 1);

/**
 * Start site div
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_site_start' ) ) :

    function corporate_plus_site_start() {
        ?>
<div class="site" id="page">
        <?php
    }
endif;
add_action( 'corporate_plus_action_before', 'corporate_plus_site_start', 20 );
/**
 * Skip to content
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_skip_to_content' ) ) :

    function corporate_plus_skip_to_content() {
        ?>
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'corporate-plus' ); ?></a>
        <?php
    }
endif;
add_action( 'corporate_plus_action_before_header', 'corporate_plus_skip_to_content', 10 );

/**
 * Main header
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_header' ) ) :
    function corporate_plus_header() {
        global $corporate_plus_customizer_all_values;

        $inner_nav = '';
        if ( !is_front_page() || ( is_front_page() && 'posts' == get_option( 'show_on_front' ) ) ) {
            $inner_nav = 'at-inner-nav';
        }
        $corporate_plus_enable_feature = $corporate_plus_customizer_all_values['corporate-plus-enable-feature'];
        if( 1 != $corporate_plus_enable_feature ) {
            $inner_nav .= ' navbar-no-fs';
        }
        ?>

        <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <svg class="veggieburger">
            <rect y="0" width="24" height="4"></rect>
            <rect y="8" width="24" height="4"></rect>
            <rect y="16" width="24" height="4"></rect>
          </svg>
          </button>
          <a class="navbar-brand" href="#">Sift Science</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            main-nav
            <!-- <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul> -->
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <?php
        if( 1 != $corporate_plus_enable_feature ) {
            echo "<div class='no-fs-clearfix'></div>";
        }
    }
endif;
add_action( 'corporate_plus_action_header', 'corporate_plus_header', 10 );