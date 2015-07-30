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
	  	  	<div class="post-title"><h1><?php the_title(); ?></h1></div>
	  	  	<div class="post-excerpt"><p>This could be a quote or the beginning intro to the article about the project. Just make sure that the view article link actually links to the article...</p></div>
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
	  	  	<div class="post-title"><h1><?php the_title(); ?></h1></div>
	  	  	<div class="post-excerpt"><p>This could be a quote or the beginning intro to the article about the project. Just make sure that the view article link actually links to the article...</p></div>
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
	  	  	<div class="post-title"><h1><?php the_title(); ?></h1></div>
	  	  	<div class="post-excerpt"><p>This could be a quote or the beginning intro to the article about the project. Just make sure that the view article link actually links to the article...</p></div>
	  	  </div>
	  	  <?php endwhile;?>
	  </div>

	</div>

</div>




<?php
get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


