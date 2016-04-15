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
			<?php //siftscienceblog_posted_on(); ?>
			<span><strong>April 05, 2016</strong> by Yoav Schatzberg</span>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>


	<div class="entry-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat iaculis semper. Integer imperdiet risus id quam varius sollicitudin sit amet aliquet diam. Mauris vitae erat a urna euismod tincidunt eu non risus. Quisque in ipsum ac sapien gravida rutrum eget a nisi. Etiam dignissim lectus eget vulputate hendrerit. Nulla ac efficitur risus, nec mollis purus. Pellentesque vitae sagittis nunc, ac aliquet purus. Integer quis nunc magna. Nullam laoreet nibh orci, ac interdum urna scelerisque at....</p>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
