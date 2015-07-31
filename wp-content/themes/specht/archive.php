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
<!-- 	  <ul class="tabs-nav">
	    <li class="selected"><a href="#tabs-1">Latest</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/commercial.php">Commercial</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/residential.php">Residential</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/hospitality.php">Hospitality</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/education.php">Education</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/experimental.php">Experimental</a></li>
	  </ul>
 -->	  
	 <div class="dropdown">
	 	<a href="#" class="js-link mobile">Sort by Category <i class="fa fa-chevron-down"></i></a>
	   <ul class="js-dropdown-list tabs-nav">
	   	<li class="selected"><a href="#tabs-1">Latest</a></li>
	   	<li><a href="<?php echo get_template_directory_uri(); ?>/ajax/commercial.php">Commercial</a></li>
	   	<li><a href="<?php echo get_template_directory_uri(); ?>/ajax/residential.php">Residential</a></li>
	   	<li><a href="<?php echo get_template_directory_uri(); ?>/ajax/hospitality.php">Hospitality</a></li>
	   	<li><a href="<?php echo get_template_directory_uri(); ?>/ajax/education.php">Education</a></li>
	   	<li><a href="<?php echo get_template_directory_uri(); ?>/ajax/experimental.php">Experimental</a></li>
	     <!-- <li class="mobile">* Reset</li> -->
	   </ul>
	 </div>

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
	  	  <div class="content-container">
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
	  	  </div>
	  	  <?php endwhile;?>

	  </div>
	</div>

</div>




<?php
get_footer(); ?>
<script type="text/javascript">
	// var dropdown = document.querySelector('.dropdown'),
	//     dropdown_ul = dropdown.querySelector('ul');

	// dropdown.addEventListener('click', function() {
	//   if(dropdown_ul.offsetLeft < 0) {
	//     dropdown_ul.style.left = '0';
	//     dropdown_ul.style.right = '0';
	//     dropdown_ul.stle.display = 'static';
	//   } else {
	//     dropdown_ul.style.left = '-9999px';
	//     dropdown_ul.style.right = '';
	//     dropdown_ul.stle.display = 'absolute';
	//   }
	// });

	( function( $ ) {

		var mq = window.matchMedia('all and (max-width: 767px)');
		if(mq.matches) {
		    // the width of browser is more then 767px
		    $(function() {
		      var list = $('.js-dropdown-list');
		      var link = $('.js-link');
		      link.click(function(e) {
		        e.preventDefault();
		        list.slideToggle(200);
		      });
		      list.find('li').click(function() {
		        var text = $(this).html();
		        var icon = '<i class="fa fa-chevron-down"></i>';
		        link.html(text+icon);
		        list.slideToggle(200);
		        if (text === '* Reset') {
		          link.html('Select one option'+icon);
		        }
		      });
		    });

		} else {
		    // the width of browser is less then 700px
		}

	} )( jQuery );

</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


