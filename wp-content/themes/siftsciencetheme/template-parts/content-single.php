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

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
  </div>
	</div>

</article><!-- #post-## -->
