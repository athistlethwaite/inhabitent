<?php
/**
 * The template for displaying find us page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="find-us-page">

		<main id="main" class="site-main" role="main">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>	
<?php get_footer(); ?>
