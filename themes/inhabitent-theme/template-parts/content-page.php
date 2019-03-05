<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="about-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->

	<form>
		<div class="info">
			 <p class="name"><label>Name <span class="required">*</span></label><span class="your-name"><input type="text" name="your-name" value="" size="40"></span> </p>
			 <p class="email"><label>Email <span class="required">*</span></label><span class="your-email"><input type="email" name="your-email" value="" size="40"></span> </p>
			 <p class="subject"><label>Subject <span class="required">*</span></label><span class="your-subject"><input type="text" name="your-subject" value="" size="40"></span> </p>
			 <p class="message"><label>Message <span class="required">*</span></label><span class="your-message"><textarea name="your-message" cols="30" rows="10"></textarea></span> </p>
			 <input type="submit" value="Submit" class="submit">
</div>
</form>
</article><!-- #post-## -->
