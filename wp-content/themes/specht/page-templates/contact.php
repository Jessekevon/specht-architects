<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="tabs-wrap">

	<div id="tabs">
	  <ul class="tabs-nav desktop">
	    <li class="selected"><a href="#tabs-about">Austin</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/new-york.php">New York</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/inquiries.php">Inquiries</a></li>
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

	  	  	<div class="intro">
	  	  	  <div class="intro-content">
	  	  	    <h1>Austin, Texas</h1>
	  	  	    <p>1314 Rosewood, Suite 103, Austin, TX 78702</p>
	  			<p>(512)345-6789</p>
	  	  	  </div>
	  	  	</div>

	  	  	<div class="the-content">
	  	  		<p>Specht Architects Austin headquarters occupies three floors of a historic building in downtown Austin.</p>
	  	  	</div>
	  </div>
	</div>

</div>




<?php
get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


