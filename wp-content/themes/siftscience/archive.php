<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Siftscience
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

			<?php siftscience_paging_nav_newer(); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php siftscience_paging_nav_older(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

</main>

  <footer>
    <div class="footer-container">
      <div class="company-info">
        <svg class="footer-logo">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-footer-logo"></use>
        </svg>
        <p>Copyright Sift Science, Inc. 2011-2016</p>
        </div> <!-- end .company-info -->
      </div> <!-- end .footer-container -->
    </footer>
  </body>
</html>
