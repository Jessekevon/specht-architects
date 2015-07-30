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
	  	  <li class="selected"><a href="#latest">Latest</a></li>
	  	  <li><a href="#press">Press</a></li>
	  	  <li><a href="#awards-&-recognition">Awards & Recognition</a></li>
	  	  <a class="press-kit" target="_blank" href="http://heriverde.nimoz.pl/wp-content/uploads/pdf-sample.pdf">Press Kit</a>

	  	</ul>

	  <div id="latest">
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
	  	  <div class="blog-feed">
	  	  	<div class="post-thumb"> <?php the_post_thumbnail( $size, $attr ); ?></div>
	  	  	<div class="post-title">
	  	  		<h1><?php the_title(); ?></h1>
	  	  		<p class="gray"><?=$cfs->get('post_location')?></p>
	  	  		<p class="gray"><?=$cfs->get('award_source')?></p>

	  	  	</div>
	  	  	<div class="post-excerpt">
	  	  		<p><?=$cfs->get('post_summary')?></p>
	  	  		<a href="<?=$cfs->get('post_link')?>">View Article&nbsp;&nbsp;></a>

	  	  	</div>

	  	  </div>
	  	  <?php endwhile;?>
	  </div>


	  <div id="press">
	  	<?php
	  	  $args = array(
	  	    'post_type' => 'post',
	  	    'posts_per_page' => 4,
	  	    'orderby' => 'date',
	  	    'order' => 'asc',
	  	    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	  	    );
	  	  query_posts( array ( 'category_name' => 'press', 'posts_per_page' => 4 ) );
	  	  while(have_posts()): the_post(); ?>
	  	  <div class="border"></div>
	  	  <div class="blog-feed">
	  	  	<div class="post-thumb"> <?php the_post_thumbnail( $size, $attr ); ?></div>
	  	  	<div class="post-title">
	  	  		<h1><?php the_title(); ?></h1>
	  	  		<p class="gray"><?=$cfs->get('post_location')?></p>

	  	  	</div>
	  	  	<div class="post-excerpt">
	  	  		<p><?=$cfs->get('post_summary')?></p>
	  	  		<a href="<?=$cfs->get('post_link')?>">View Article&nbsp;&nbsp;></a>

	  	  	</div>
	  	  </div>
	  	  <?php endwhile;?>
	  </div>


	  <div id="awards-&-recognition">
	  	<?php
	  	  $args = array(
	  	    'post_type' => 'post',
	  	    'posts_per_page' => 4,
	  	    'orderby' => 'date',
	  	    'order' => 'asc',
	  	    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	  	    );
	  	  query_posts( array ( 'category_name' => 'awards-recognition', 'posts_per_page' => 4 ) );
	  	  while(have_posts()): the_post(); ?>
	  	  <div class="border"></div>
	  	  <div class="blog-feed">
	  	  	<div class="post-thumb"> <?php the_post_thumbnail( $size, $attr ); ?></div>
	  	  	<div class="post-title">
	  	  		<h1><?php the_title(); ?></h1>
	  	  		<p class="gray"><?=$cfs->get('award_source')?></p>

	  	  	</div>
	  	  	<div class="post-excerpt">
	  	  		<p><?=$cfs->get('post_summary')?></p>
	  	  		<a href="<?=$cfs->get('post_link')?>">View Article&nbsp;&nbsp;></a>

	  	  	</div>
	  	  </div>
	  	  <?php endwhile;?>
	  	  <div class="border"></div>
	  	  <div class="about-intro">
	  	    <h1>Download our Press Kit</h1>
	  	    <div class="button-wrapper">
	  	      <a target="_blank" href="http://heriverde.nimoz.pl/wp-content/uploads/pdf-sample.pdf"><button class="button">Download Now</button></a>
	  	    </div>

	  	  </div>

	  </div>

	</div>

</div>




<?php
get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


