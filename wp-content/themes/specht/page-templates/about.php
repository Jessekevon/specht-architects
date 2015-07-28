<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="tabs-wrap">

	<div id="tabs">
	  <ul class="tabs-nav desktop">
	    <li class="selected"><a href="#tabs-about">About Us</a></li>
	    <li><a href="<?php echo get_template_directory_uri(); ?>/ajax/our-team.php">Our Team</a></li>
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
	  	<div class="intro">
	  	  <div class="intro-content">
	  	    <h1>About Specht Architects</h1>
	  	  </div>
	  	</div>
	  	<div class="the-content">
	  		<p>A small company with rigorous standards for modern design, the firm's award-winning work includes commercial, institutional and residential projects, as well as custom furniture. The firm maintains offices in New York City and Austin, Texas.</p>
	  		<div class="image-row">
	  			
	  		</div>
	  		<p>Specht Harpman was recognized in Wallpaper* magazine's Architects' Directory as one of the "top 50 up and coming architectural practices from around the world." The firm recently received an Honor Award from the American Institute of Architects (Austin) for Doyle Hall at St. Edward's University. Specht Harpman has been listed among the "Emerging Voices" by the Architectural League of New York, "Tastemakers" by House and Garden magazine, and as one of New York City's "Top 100" architects by New York Magazine.</p>
	  		<p>The firm has been honored with a number of design awards, including those from the Texas Society of Architects, New York AIA (American Institute of Architects), Austin AIA, and two Design Distinction awards from I.D. Magazine. The work of Specht Harpman has been published in many national and international publications, including The Wall Street Journal, Dwell, Metropolis, Architectural Record, Architecture, AD, Architectural Digest, Residential Architect, Interior Design, Texas Architect, Interiors, The New York Times, The New York Times Magazine, Wired, New York Magazine, and W magazine, as well as on HGTV.</p>
	  		<div class="image-row">
	  			
	  		</div>
	  	</div>
	  	<div class="intro">
	  	  <div class="intro-content">
	  	    <h1>Selected Clients</h1>
	  	  </div>
	  	</div>
		<div class="the-content">
			<p>Specht Architects has worked with some of the largest brands in the world. Let’s put something humble about our clients here.</p>
		</div>
		<div class="selected-clients">
			<p></p>
		</div>
	  </div>
	</div>

</div>




<?php
get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


