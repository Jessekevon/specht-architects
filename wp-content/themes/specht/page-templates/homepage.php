<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


 <div class="slider home-gallery fadeIn">
	 <?php foreach ($cfs->get('homepage_gallery') AS $homepage_gallery): ?>
	  <div class="landing-background-image" style="background: url(<?php echo $homepage_gallery['gallery_image']?>) no-repeat 50% 75%; background-size:cover"></div>
	<?php endforeach; ?>
 </div>

 	<div class="arrows">
 		<p class="left">left</p>
 		<p class="right">right</p>
 	</div>

 	<div class="description">
 		<p>Title</p>
 		<p>Subtilte</p>
 	</div>

 	<div class="next-project">
 		<p>View Project</p>
 	</div>

	
<?php
get_footer();
