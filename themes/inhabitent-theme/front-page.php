<?php
/**
 * The template for displaying the home-page.
 *
 * @package Inhabitent_Theme
 */

get_header();?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <section class = "front-hero-image">
    </section>

     <!-- SHOP STUFF  -->
    <section class="product-types container">
      <h2>Shop Stuff</h2>
      <div class="product-type-blocks">
          <?php $product_types=get_terms('product_type'); ?>
          <?php foreach ( $product_types as $product_type ) : setup_postdata( $term ); ?>
          <div class="product-type-wrapper">
            <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/'.$product_type ->slug . '.svg'?>> 
            <p><?php echo $product_type -> description ?></p>
            <a class="btn" href=<?php echo get_term_link($product_type)?>> <?php echo $product_type->name?> Stuff</a>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </section>

     <!-- INHABITENT JOURNAL -->
    <section class ="inhabitent-journal container">
      <h2>Inhabitent Journal</h2>
      <div class="latest-entries container">

        <ul>
          <?php $journal_posts = inhabitent_get_latest_posts();?>
          <?php foreach ($journal_posts as $post): setup_postdata($post); ?>
          
          <li>
              <?php if (has_post_thumbnail()): ?>
              
              <div class="thumbnail">
					      <?php the_post_thumbnail('large');?>
              </div>

				      <?php endif; ?>
            
              <div class="latest-entries-info">
                <p><?php the_time('j F, Y'); ?> / <?php comments_number(); ?></p>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <a class="read-entry-btn" href="<?php the_permalink();?>">Read Entry</a>
              </div>
          </li>

          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>

     <!-- LATEST ADVENTURES ** stretch goal -->
     <!-- <section class="latest-adventure">
     </section> -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>

