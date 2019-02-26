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

						<?php while (have_posts()) : the_post(); ?>
				<div class = "product-grid-item">
					<div class="product-wrapper">
        		<?php /* Start the loop */ ?>
						<a class href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' );  ?></a>
					</div>
							
						<div class="product-info">
							<h3 class="product-title"><?php the_title(); ?></h3>
							<span class="product-price"><?php echo CFS()->get( 'product_price' ); ?></span>
						</div>
				
				</div>
<?php endwhile;  ?>
				<?php endif; ?>

			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>