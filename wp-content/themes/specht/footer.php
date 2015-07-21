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


<!-- 				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="wrap">
						<p>Website by what.it.is</p>
					</div>
				</footer>
 -->				

	<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/fade-in.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.14/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
	<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
</body>
</html>