<?php
/**
 * The template for displaying archive products.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="taxonomy-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
				<?php the_archive_description('<div class="taxonomy-description">','</div>');?>
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

