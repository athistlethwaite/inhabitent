<?php
/**
 * The template for displaying the home-page.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <div>
      <?php 
      $journal_posts = inhabitent_get_latest_posts();
      ?>

      <?php 
      foreach($journal_posts as $post) : setup_postdata( $post ); 
      ?>

      <div>
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium'); ?> 
        <?php endif; ?> 

        <a href="<?php the_permalink(); ?>">Read Entry</a> 

        <?php 
          the_date();
          echo comments_number();
          the_title();

        endforeach;

        wp_reset_postdata();
        ?>
      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>