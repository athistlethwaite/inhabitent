<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="single-journal-page has-sidebar">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<button class="social-media-button"><i class="fab fa-facebook-f"></i> Like</button>
			<button class="social-media-button"><i class="fab fa-twitter"></i> Tweet</button>
			<button class="social-media-button"><i class="fab fa-pinterest"></i> Pin</button>

			<form action="find-us" method="post" class="find-us">

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>	
<?php get_footer(); ?>
