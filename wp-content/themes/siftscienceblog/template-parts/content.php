<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package siftscienceblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			if ( is_single() ) {
				  the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<span><?php the_date('F d, Y', '<strong>', '</strong>'); ?> by <?php the_author(); ?></span>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>


	<div class="entry-content">
		<div class="post-excerpt">
			<p><?php the_excerpt(); ?></p>
		</div>
		<div class="featured-image">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail();
				}
			?>
		</div>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
