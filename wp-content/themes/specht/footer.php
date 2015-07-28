<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<div class="wrap">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<h2>Follow Specht Architects</h2>
		<div class="social">
			<a href="#">Facebook</a> /
			<a href="#">Twitter</a> /
			<a href="#">Instagram</a> / 
			<a href="#">Google+</a> /
			<a href="#">Pinterest</a> /
			<a href="#">Houzz</a> /
			<a href="#">Behance</a> /
			<a href="#">LinkedIn</a> /
		</div>
		<div class="footer-nav">
			<a href="#">Work</a>
			<a href="#">About</a>
			<a href="#">Latest</a> 
			<a href="#">Contact</a>
		</div>
		<p>© 2015 Specht Architects. All rights reserved.</p>
		<p>Design by <a href="http://what.it.is/">what.it.is</a></p>

	</footer>
</div>
				

	<?php wp_footer(); ?>
	<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
	<script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/fade-in.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.14/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
</body>
</html>