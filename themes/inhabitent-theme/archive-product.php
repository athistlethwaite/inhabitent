<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container">

			<header class="page-header">
				<h1 class="page-title">Shop Stuff</h1>

				<ul class="product-type-list">
					<?php if ( have_posts() ) : ?>
					<?php $product_types=get_terms('product_type'); ?>
					<?php foreach ( $product_types as $product_type ) : setup_postdata( $term ); ?>

					<li>
							<a href=<?php echo get_term_link($product_type)?>> <?php echo $product_type->name?></a>
					</li>

					<?php endforeach; wp_reset_postdata(); ?>

				</ul>
			</header>

			
			<div class="product-grid">
				<div class = "product-grid-item">
					<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 16, 'order' => 'ASC'); $product_posts = get_posts( $args ); ?>
					
						<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
					
					<div class="product-wrapper">
        		<?php /* Start the loop */ ?>
						<a class href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' );  ?></a>
							
						<div class="product-info">
							<p class="product-title"><?php the_title(); ?></p>
							<p class="product-dots">......................</p>
							<p class="product-price"><?php echo CFS()->get( 'product_price' ); ?></p>
						</div>

					</div>
				
				<?php endforeach; wp_reset_postdata(); ?>
				<?php endif; ?>

				</div>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>