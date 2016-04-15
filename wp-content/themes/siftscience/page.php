<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Siftscience
 */

get_header(); ?>


			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>

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