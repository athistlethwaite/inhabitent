<?php
/**
 * The template for displaying the home-page.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <section class = "front-hero-image">
    </section>

     <!-- SHOP STUFF  -->
    <section class="product-types">
        <?php $product_types=get_terms('product_type'); ?>
        <?php foreach ( $product_types as $product_type ) : setup_postdata( $term ); ?>
        <div>
          <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/'.$product_type ->slug . '.svg'?>> 
          <p><?php echo $product_type -> description ?></p>
            <a href=<?php echo get_term_link($product_type)?>> <?php echo $product_type->name?> stuff</a>
        </div>

        <?php endforeach; wp_reset_postdata(); ?>
    </section>

     <!-- INHABITENT JOURNAL -->
    <section class ="inhabitent-journal">
      <h1>Inhabitent Journal</h1>

        <?php $journal_posts = inhabitent_get_latest_posts();?>
        <?php foreach ($journal_posts as $post): setup_postdata($post); ?>

				<div>
					<?php if (has_post_thumbnail()): ?>
					<?php the_post_thumbnail('medium');?>
				  <?php endif;?>

        <a href="<?php the_permalink();?>">Read Entry</a>

        <?php
        the_date();
        echo comments_number();
        the_title();

        endforeach;

        wp_reset_postdata();
        ?>
      </div>
    </section>

     <!-- LATEST ADVENTURES ** stretch goal -->
     <!-- <section class="latest-adventure">
     </section> -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>