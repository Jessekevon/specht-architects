<?php
// Include WordPress
define('WP_USE_THEMES', false);
require_once('../../../../wp-load.php'); ?>
<div id="press">
	<?php
	  $args = array(
	  'post_type' => 'post',
	  'cat'      => '81',
	  'posts_per_page' => 2000,
	  'orderby'=> 'date', 
	  'order' => 'ASC',
	  'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	    );
	  
	  query_posts($args); 
	  while(have_posts()): the_post(); ?>
	  <p><?php the_title(); ?></p>
	  <?php endwhile;?>
</div>
