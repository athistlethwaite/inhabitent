<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<div class id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>
		<?php the_title( '<p class="entry-title">', '</p>' ); ?>
  <p><?php echo CFS()->get( 'product_price' ); ?></p>

</div>
