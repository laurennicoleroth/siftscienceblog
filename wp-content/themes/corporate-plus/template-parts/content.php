<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AcmeThemes
 * @subpackage Corporate Plus
 */
global $corporate_plus_customizer_all_values;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('init-animate fadeInDown animated'); ?>>
	<div class="content-wrapper">
		<div class="row">
	    <div class="col-md-8">
	      <header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php
					if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<span>
								<?php the_date('F d, Y', '<strong>', '</strong>'); ?> by <?php the_author(); ?>
							</span>
						</div><!-- .entry-meta -->
						<?php
					endif; ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php
					the_excerpt();
					?>
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'corporate-plus' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
				<div class="clearfix"></div>
				<footer class="entry-footer">
					<?php corporate_plus_entry_footer(); ?>
				</footer><!-- .entry-footer -->
	    </div>

	    <div class="col-md-4">
	      <?php
					if ( $corporate_plus_customizer_all_values['corporate-plus-blog-archive-layout'] == 'left-image' && has_post_thumbnail() ) {
						?>
						<!--post thumbnal options-->
						<div class="post-thumb">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div><!-- .post-thumb-->
						<?php
					}
				?>
	    </div>
  </div>
	</div>

</article><!-- #post-## -->
