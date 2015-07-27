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
      <h2><?php the_title(); ?></h2>
    </div>
  </div>

  <div class="the-content">
    <?php the_content(); ?>
  </div>
  
  <div id="links">
    <div class="masonry">
      <div class="grid-sizer"></div>
      <div class="gutter-sizer"></div>
      <?php foreach ($cfs->get('work_image_gallery') AS $work_image_gallery): ?>
      <div class="item">
        <a href="<?php echo $work_image_gallery['gallery_image']?>" title="">
        <img src="<?php echo $work_image_gallery['gallery_image']?>" alt="Banana">
        </a>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>


<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
  <div class="slides fade-slide"></div>
  <a class="prev">‹</a>
  <a class="next">›</a>
  <a class="close">×</a>
</div>
<?php endwhile;
  ?>
<?php
get_footer();