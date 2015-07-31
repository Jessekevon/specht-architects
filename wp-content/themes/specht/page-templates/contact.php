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

		<ul class="tabs-nav">
		  <li class="selected"><a href="#austin">Austin</a></li>
		  <li><a href="#new-york">New York</a></li>
		  <li><a href="#inquiries">Inquiries</a></li>
		</ul>

	  <div id="austin">

	  	<div class="intro-image" style="background: url('<?=$cfs->get('austin_top_image')?>') no-repeat 50% 50%; background-size:cover"></div>

	  	<div class="content-container">
	  		<div class="about-intro">
	  		  <h1><?=$cfs->get('austin_intro_title')?></h1>
	  		  <div class="address">
	  		  	<p><?=$cfs->get('austin_intro_address')?></p>
	  		  	<p><?=$cfs->get('austin_intro_number')?></p>
	  		  </div>
	  		</div>

  		  	<div class="the-content text-center">
  		  		<p><?=$cfs->get('austin_intro_subtitle')?></p>
  		  	</div>
	  	</div>
	  </div>

	  <div id="new-york">

	  	<div class="intro-image" style="background: url('<?=$cfs->get('new_york_top_image')?>') no-repeat 50% 50%; background-size:cover"></div>
	  	<div class="content-container">
		  	<div class="about-intro">
		  	  <h1><?=$cfs->get('new_york_intro_title')?></h1>
		  	  <div class="address">
		  	  	<p><?=$cfs->get('new_york_intro_address')?></p>
		  	  	<p><?=$cfs->get('new_york_intro_number')?></p>
		  	  </div>
		  	</div>
	  	  	<div class="the-content text-center">
	  	  		<p><?=$cfs->get('new_york_intro_subtitle')?></p>
	  	  	</div>
	  	</div>
	  </div>

	  <div id="inquiries">
	  	<div class="content-container">
	  		<div class="intro">
	  		  <div class="intro-content">
	  		    <h1>Drop Us a Line</h1>
	  		    <p>Austin / New York</p>
	  		  </div>
	  		</div>
	  		<div class="the-content text-center">
	  			<p>Specht Architects Austin headquarters occupies three floors of a historic building in downtown Austin.</p>
	  		</div>
	  		<?php echo do_shortcode('[gravityform id="1" name="Inquiries" ajax="true"]'); ?>
	  	</div>
	  </div>



	</div>
</div>




<?php
get_footer(); ?>
<script type="text/javascript">
( function( $ ) {

} )( jQuery );

</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>  


