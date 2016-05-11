<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SiftScienceTheme
 */

get_header(); ?>

<div class="jumbotron">
  <div class="row">
    <div class="container">
  			<?php //previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '<', 'Previous post link', 'vantage' ) . '</span>' ); ?>

        <div class="nav-previous">
          <?php previous_post_link('%link', '<img src="http://siftscienceblog.laurennicoleroth.com/wp-content/themes/siftsciencetheme/assets/img/previous.png" alt="Previous" />') ?>
        </div>

        <div class="single-heading">
  		  	<h3><a href="/">BLOG HOME</a></h3>
  				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
  				<?php while ( have_posts() ) : the_post(); ?>
            <ul id="meta-single">
              <li><?php the_author(); ?></li> |
              <li><?php the_date('F d, Y', '<strong>', '</strong>');  ?></li>
              <li><?php the_category(); ?></li>
            </ul>

  				<?php endwhile; // End of the loop. ?>
          <ul id="social-media-links">
            <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) {
          ADDTOANY_SHARE_SAVE_KIT( array( 'use_current_page' => true ) );
          } ?>
            <!-- <li id="twitter"><a href="">twitter</a></li>
            <li id="facebook"><a href="">facebook</a></li>
            <li id="email"><a href="">email</a></li>
            <li id="linkedin"><a href="">linkedin</a></li>
            <li id="google"><a href="">google+</a></li> -->
          </ul>

        </div>

        <div class="nav-next">
          <?php previous_post_link('%link', '<img src="http://siftscienceblog.laurennicoleroth.com/wp-content/themes/siftsciencetheme/assets/img/next.png" alt="Previous" />') ?>
        </div>
      </div>
		</div>
  </div>
</div>
<div id="primary" class="content-area row">
    <main id="main" class="site-main container" role="main">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'single' ); ?>

     <!--  <a id="share" href="#"><img src="http://siftscienceblog.laurennicoleroth.com/wp-content/themes/siftsciencetheme/assets/img/share.png"/></a> -->
      <div id="share">
      <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) {
          ADDTOANY_SHARE_SAVE_KIT( array( 'use_current_page' => true ) );
          } ?>
      </div>
      <a id="subscribe" href="#">Newsletter Subscribe</a>
      <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

      <div id="about-author">
        <?php
          echo get_avatar( $size = '100' );
        ?>
        <p class="author-description">
          <?php echo the_author_meta('description'); ?>
        </p>
      </div>

      <?php $orig_post = $post;
      global $post;
      $categories = get_the_category($post->ID);
      if ($categories) {
      $category_ids = array();
      foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
      $args=array(
      'category__in' => $category_ids,
      'post__not_in' => array($post->ID),
      'posts_per_page'=> 5, // Number of related posts that will be displayed.
      'ignore_sticky_posts'=>1,
      'orderby'=>'rand' // Randomize the posts
      );
      $my_query = new wp_query( $args );
      if( $my_query->have_posts() ) {
      echo '<div id="related-by-category" class="clear"><h3>Related Posts</h3><ul>';
      while( $my_query->have_posts() ) {
      $my_query->the_post(); ?>
      <li>
       <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
       </a>
       <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        <?php the_category(); ?>
      </li>
      <? }
      echo '</ul></div>';
      } }
      $post = $orig_post;
      wp_reset_query(); ?>
    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->
<div id="try-sift-science" class="row">
  <div class="container">
    <h1>Try Sift Science Now For Free</h1>
    <p>Get 30 days free! No credit card, contracts, or setup fees required. It's that easy.</p>
    <button><a href="https://siftscience.com/signup">Get Started</a></button>
  </div>
</div>
<?php get_footer(); ?>