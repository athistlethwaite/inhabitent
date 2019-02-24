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

			<header class="page-header">
				<?php single_term_title( '<h1 class="page-title">', '</h1>' );?>
				<!-- <?php the_archive_description('<div class="taxonomy-description">','</div>');?> -->
			</header>

			<section class="product-types"><!--add class-->
			<?php $product_types=get_terms('product_type'); ?>
        <?php foreach ( $product_types as $product_type ) : setup_postdata( $term ); ?>
        <div>
            <a href=<?php echo get_term_link($product_type)?>> <?php echo $product_type->name?></a>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
			</section>

			
			<section><!--add class-->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content','products' );
				?>
			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</section>

		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

