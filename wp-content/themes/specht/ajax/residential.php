<?php
// Include WordPress
define('WP_USE_THEMES', false);
require_once('../../../../wp-load.php'); ?>
<div id="commercial">
	<?php
	  $args = array(
	  	'post_type' => 'work',
	  	'taxonomy' =>'residential',
	    'posts_per_page' => 5,
	    'orderby' => 'date',
	    'order' => 'asc',
	    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	    );
	  query_posts($args);
	  while(have_posts()): the_post(); ?>
	  <div class="content-container">
	  	<div class="col2 image-block">
	  	    <a href="<?php the_permalink(); ?>">
	  	      <div class="image-block-background-image-wrapper">
	  	        <div class="image-block-background-image" style="background: url('<?php echo $cfs->get('grid_item_featured_image'); ?>') no-repeat 50% 50%; background-size:cover">
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
	  </div>
	  <?php endwhile;?>
</div>
