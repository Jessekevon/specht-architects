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
      <li class="selected"><a href="#about-us">About Us</a></li>
      <li><a href="#our-team">Our Team</a></li>
      <li><a href="#awards-&-recognition">Awards & Recognition</a></li>
    </ul>


    <div id="about-us">
      <div class="about-body">
        <div class="intro-image" style="background: url('<?=$cfs->get('about_us_top_image')?>') no-repeat 50% 50%; background-size:cover"></div>
        <div class="about-intro">
          <h1><?=$cfs->get('about_us_intro_title')?></h1>
          <p><?=$cfs->get('about_us_intro_subtitle')?></p>
        </div>
        <div class="image-row">
          <div class="body-copy-image-block col2" style="background: url('<?=$cfs->get('about_us_content_image_left')?>') no-repeat 50% 50%; background-size:cover"></div>
          <div class="body-copy-image-block col2" style="background: url('<?=$cfs->get('about_us_content_image_right')?>') no-repeat 50% 50%; background-size:cover"></div>
        </div>
        <div class="about-body-copy">
          <p><?=$cfs->get('about_us_body_copy')?></p>
        </div>
        <div class="outro-image" style="background: url('<?=$cfs->get('about_us_bottom_image')?>') no-repeat 50% 50%; background-size:cover"></div>
        <div class="about-intro">
          <h1><?=$cfs->get('selected_clients_intro_title')?></h1>
          <p><?=$cfs->get('selected_clients_intro_subtitle')?></p>
        </div>
        <div class="selected-clients">
          <!-- begin selected clients loop -->
          <?php foreach ($cfs->get('selected_clients') AS $selected_clients): ?>
              <p><?php echo $selected_clients['client']?></p>
            <?php endforeach ?>
            <!-- end loop -->
        </div>

      </div>
    </div>


    <div id="our-team">
    	<div class="our-team-body">
    	  <div class="intro-image" style="background: url('<?=$cfs->get('our_team_top_image')?>') no-repeat 50% 50%; background-size:cover"></div>
    	  <div class="about-intro">
    	    <h1><?=$cfs->get('our_team_intro_title')?></h1>
    	    <p><?=$cfs->get('our_team_intro_subtitle')?></p>
    	  </div>

    	  <!-- begin team loop -->
    	  <?php foreach ($cfs->get('the_team') AS $the_team): ?>

    	  <div class="team-loop">
    	  	<div class="border"></div>
    	  	<div class="team-image" style="background: url('<?php echo $the_team['team_image']?>') no-repeat 50% 50%; background-size:cover"></div>
    	  	<div class="team-body-copy">
    	  		<div class="team-intro">
    	  			<h1><?php echo $the_team['team_name']?></h1>
    	  			<p><?php echo $the_team['team_title']?></p>
    	  		</div>
    	  		<div class="team-bio">
    	  			<p><?php echo $the_team['team_bio']?></p>
    	  		</div>
    	  	</div>
    	  </div>
    	  <?php endforeach ?>
    	  <!-- end loop -->

    	</div>
    </div>


    <div id="awards-&-recognition">
    	<div class="about-body">
    	  <div class="intro-image" style="background: url('<?=$cfs->get('awards_recognition_top_image')?>') no-repeat 50% 50%; background-size:cover"></div>
    	  <div class="about-intro">
    	    <h1><?=$cfs->get('awards_recognition_intro_title')?></h1>
    	    <p><?=$cfs->get('awards_recognition_intro_subtitle')?></p>
    	  </div>
    </div>
  </div>

</div>
<?php
  get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-initialization.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab-animation.js" type="text/javascript"></script>