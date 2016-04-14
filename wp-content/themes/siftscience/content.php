<?php
/**
 * @package Siftscience
 */
?>
content
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>

		<?php if( 'jetpack-portfolio' == get_post_type() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-featured-image as-background">
				<?php the_post_thumbnail( 'full' ); ?>
			</a>
		<?php else : ?>
			<div class="entry-featured-image as-background">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

	<?php endif; ?>

	<?php if ( 'post' != get_post_type() || 'aside' == get_post_format() ) : ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'siftscience' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'siftscience' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php endif; ?>

</article><!-- #post-## -->