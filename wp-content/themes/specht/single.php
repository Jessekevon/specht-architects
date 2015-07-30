<?php
  /**
   * The Template for displaying all single posts
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
  
  get_header(); ?>
<?php
  // Start the Loop.
  while ( have_posts() ) : the_post(); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $image = $image[0]; ?>
<div class="background-image fadeIn" style="background: url('<?php echo $image; ?>') no-repeat 50% 75%; background-size:cover"></div>
<?php endif; ?>


  <div class="body-content wrap">
    <div class="intro">
      <div class="intro-content">
        <h1><?php the_title(); ?></h1>
        <p>Tulum, Mexico</p>
      </div>
    </div>

    <div class="the-content">
      <?php the_content(); ?>
    </div>

    <div class="sidebar">
      <div class="sidebar-left">
        <p class="sidebar-title">Awards</p>
        <ul>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
        </ul>
      </div>
      <div class="sidebar-right">
        <p class="sidebar-title">Team</p>
        <ul>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
          <li><span class="gray">Best Design of the Year</span>Dwell Magazine, 2015</li>
        </ul>
      </div>
    </div>

    <div class="masonry">
      <div class="grid-sizer"></div>
      <div class="gutter-sizer"></div>
      <ul id="lightGallery">
          <?php foreach ($cfs->get('work_image_gallery') AS $work_image_gallery): ?>
            <li class="item" data-src="<?php echo $work_image_gallery['gallery_image']?>" title="">
              <img src="<?php echo $work_image_gallery['gallery_image']?>" alt="">
            </li>
          <?php endforeach ?>
      </ul>

    </div>

<!--     <ul id="lightGallery">
      <li data-src="http://localhost:8888/specht/wp-content/uploads/2015/07/Balcony5.jpg">
        <img src="http://localhost:8888/specht/wp-content/uploads/2015/07/Balcony5.jpg" />
      </li>
      <li data-src="http://localhost:8888/specht/wp-content/uploads/2015/07/Living3.jpg">
        <img src="http://localhost:8888/specht/wp-content/uploads/2015/07/Living3.jpg" />
      </li>
    </ul>
 -->
  </div>

<?php endwhile;
  ?>
<?php
get_footer();
