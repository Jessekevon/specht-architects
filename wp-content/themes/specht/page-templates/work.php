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
	    <li><a href="#tabs-1">Latest</a></li>
	    <li><a href="/specht/ajax/commercial.html">Commercial</a></li>
	    <li><a href="/specht/ajax/residential.html">Residential</a></li>
	    <li><a href="/specht/ajax/hospitality.html">Hospitality</a></li>
	    <li><a href="/specht/ajax/education.html">Education</a></li>
	    <li><a href="/specht/ajax/experimental.html">Experimental</a></li>
	  </ul>
	  <div id="tabs-1">
	    Latest
	  </div>
	</div>

</div>

<?php
get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


