<?php
/**
 * Template Name: Latest
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="tabs-wrap">

	<div id="tabs">
	  <ul class="tabs-nav desktop">
	    <li class="selected"><a href="#tabs-about">Latest</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/press.php">Press</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/awards-&-recognition.php">Awards & Recognition</a></li>
	    <!-- <li id="magic-line" style="left: 0px; width: 100px;"></li -->
	  </ul>
<!-- 	  <ul class="tabs-nav mobile">
	    <li class="selected"><a href="#tabs-1">Latest</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/commercial.html">Commercial</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/residential.php">Residential</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/hospitality.html">Hospitality</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/education.html">Education</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/experimental.html">Experimental</a></li>
	  </ul>
 -->
	  <div id="tabs-about">
	  	<?php
	  	  $args = array(
	  	    'post_type' => 'post',
	  	    'posts_per_page' => 4,
	  	    'orderby' => 'date',
	  	    'order' => 'asc',
	  	    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	  	    );
	  	  query_posts($args);
	  	  while(have_posts()): the_post(); ?>
	  	  <div class="border"></div>
	  	  <p><?php the_title(); ?></p>
	  	  <?php endwhile;?>
	  </div>
	</div>

</div>




<?php
get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


