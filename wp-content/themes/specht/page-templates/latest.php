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

<!-- 	  	<ul class="tabs-nav">
	  	  <li class="selected"><a href="#latest">Latest</a></li>
	  	  <li><a href="#press">Press</a></li>
	  	  <li><a href="#awards-&-recognition">Awards & Recognition</a></li>
	  	  <a class="press-kit" target="_blank" href="http://heriverde.nimoz.pl/wp-content/uploads/pdf-sample.pdf">Press Kit</a>
	  	</ul>
 -->
	  	<div class="dropdown">
	  		<a href="#" class="js-link mobile">Sort by Category <i class="fa fa-chevron-down"></i></a>
	  	  <ul class="js-dropdown-list tabs-nav">
	  	  	<li class="selected"><a href="#latest">Latest</a></li>
	  	  	<li><a href="#press">Press</a></li>
	  	  	<li><a href="#awards-&-recognition">Awards & Recognition</a></li>
	  	  	<a class="press-kit" target="_blank" href="http://heriverde.nimoz.pl/wp-content/uploads/pdf-sample.pdf">Press Kit</a>
	  	  </ul>
	  	</div>




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


