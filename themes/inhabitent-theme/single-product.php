<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="single-product-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="single-product-wrapper">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header class="entry-header">
				<div class="product-image-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>
			</header><!-- .entry-header -->
	
	
			<div class="entry-content">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<span><?php echo CFS()->get( 'product_price' ); ?></span>
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>


				<div class="social-button">
						<button class="social-media-button"><i class="fab fa-facebook-f"></i> Like</button>
						<button class="social-media-button"><i class="fab fa-twitter"></i> Tweet</button>
						<button class="social-media-button"><i class="fab fa-pinterest"></i> Pin</button>
				</div>

			</div>
			</div><!-- .entry-content -->

		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
