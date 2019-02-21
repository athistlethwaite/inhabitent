<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

<footer class="site-footer">
		<div class="contact-info">
			<h3>Contact Info</h3>
			<p><i class="fas fa-envelope"></i>info@inhabitent.com</p>
			<p><i class="fas fa-phone" data-fa-transform="rotate-90"></i> 778-456-7891</p>
			<p class="social-media-icons">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter-square"></i>
				<i class="fab fa-google-plus-square"></i>
			</p>
		</div>

		<div class="business-hours">
			<h3>Business Hours</h3>
			<p><span>Monday-Friday:</span> 9am to 5pm</p>
			<p><span>Saturday:</span> 10am to 2pm</p>
			<p><span>Sunday:</span> Closed</p>
		</div>

		<div class="logo-svg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" />
		</div>

		<div class="copyright">
			<p>Copyright &copy; 2019 Inhabitent</p>
		</div>
</footer>

		<?php wp_footer(); ?> 

	</body>
</html>



				
