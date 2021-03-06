<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AcmeThemes
 * @subpackage Corporate Plus
 */
global $corporate_plus_customizer_all_values;
get_header(); ?>
	<div class="wrapper inner-main-title init-animate fadeInDown animated">
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php endif; ?>

		<div class="row">
			<div class="container">
  			<div class="col-md-6">
  				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        	<p class="site-description"><?php  $description = get_bloginfo( 'description', 'display' ); echo $description; /* WPCS: xss ok. */ ?></p>
  			</div>
  			<div class="col-md-6">
  				<img src="wp-content/themes/corporate-plus/assets/img/blog-lady.svg" alt="" />
  			</div>
			</div>
		</div>

	</div>


<div id="blog-menu" class="row animate">
	<div class="container">

      <?php wp_nav_menu(
                array(
                    'theme_location' => 'utility',
                    'menu_id' => 'utility',
                    'menu_class' => 'nav navbar-nav animated',
                )
            );
      ?>

      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
          <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
          <i class="fa fa-search" aria-hidden="true"></i>
          <input type="search"
                class="search-field"
                placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
        </label>
        <input type="submit" class="search-submit fa fa-search" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">


      </form>

  		<a id="newsletter" href="#">newsletter sign up</a>

	</div>
</div>

	<div id="content" class="site-content">

		<?php
		if( 1 == $corporate_plus_customizer_all_values['corporate-plus-show-breadcrumb'] ){
			corporate_plus_breadcrumbs();
		}
		?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar( 'left' ); ?>
		<?php get_sidebar(); ?>

	</div><!-- #content -->
<?php get_footer(); ?>