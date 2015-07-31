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

<!-- 		<ul class="tabs-nav">
		  <li class="selected"><a href="#austin">Austin</a></li>
		  <li><a href="#new-york">New York</a></li>
		  <li><a href="#inquiries">Inquiries</a></li>
		</ul>
 -->
		<div class="dropdown">
			<a href="#" class="js-link mobile">Sort by Category <i class="fa fa-chevron-down"></i></a>
		  <ul class="js-dropdown-list tabs-nav">
		  	<li class="selected"><a href="#austin">Austin</a></li>
		  	<li><a href="#new-york">New York</a></li>
		  	<li><a href="#inquiries">Inquiries</a></li>
		  </ul>
		</div>


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


