<?php
/**
 * Template Name: Work
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="tabs-wrap">

	<div id="tabs">
	  <ul class="tabs-nav">
	    <li class="selected"><a href="#tabs-1">Latest</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/commercial.php">Commercial</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/residential.php">Residential</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/hospitality.php">Hospitality</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/education.php">Education</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/experimental.php">Experimental</a></li>
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
	  <div id="tabs-1">
	  	<?php
	  	  $args = array(
	  	    'post_type' => 'work',
	  	    'posts_per_page' => 5,
	  	    'orderby' => 'date',
	  	    'order' => 'asc',
	  	    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	  	    );
	  	  query_posts($args);
	  	  while(have_posts()): the_post(); ?>
	  	  <div class="col2 image-block">
	  	      <a href="<?php the_permalink(); ?>">
	  	        <div class="image-block-background-image-wrapper">
	  	          <div class="image-block-background-image fadeIn" style="background: url('<?php echo $cfs->get('grid_item_featured_image'); ?>') no-repeat 50% 50%; background-size:cover">
	  	          </div>

	  	        </div>
	  	    </a>
	  	      <div class="image-block-content">
	  	        <div class="image-block-content-inner">
	  	          <h1><?php the_title(); ?></h1>
	  	          <p class="gray">Hospitality</p>

	  	          <p class="small"><?php echo get_post_meta(get_the_ID(), 'excerpt', true); ?></p>
	  	          <a href="<?php the_permalink(); ?>">View Project&nbsp;&nbsp;></a>
	  	        </div>
	  	      </div>
	  	  </div>
	  	  <?php endwhile;?>

	  </div>
	</div>

</div>




<?php
get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


