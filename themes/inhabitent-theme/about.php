<?php
/**
 * The template for displaying the about page.
 * 
 * Template Name: About page 
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class = "about-hero-image">
			<!-- <h1 class="entry-title">About</h1> -->
		</section>
		
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="about-inhabitent">
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			</div>

			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
