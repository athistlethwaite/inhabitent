<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
