<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SiftScienceTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('init-animate fadeInDown animated'); ?>>
	<div class="content-wrapper">
		<div class="row">
	    <div class="col-md-7">
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

				</div><!-- .entry-content -->
				<div class="clearfix"></div>
				<footer class="entry-footer">

				</footer><!-- .entry-footer -->
	    </div>

	    <div class="col-md-5">
				<div class="post-thumb">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div><!-- .post-thumb-->
	    </div>
  </div>
	</div>

</article><!-- #post-## -->
