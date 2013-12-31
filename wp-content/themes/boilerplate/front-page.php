<?php
/*
 * Template Name: Front Page
 */
get_header(); ?>
<div id="fp-slideshow-wrap">
  <div class="centered">
  <div class="example-orbit" data-orbit>
    <!-- Start of Front Page Slides Repeater -->
    <?php if(get_field('front_page_slides')): ?>
      <?php while(has_sub_field('front_page_slides')): ?>
        <li>
          <img src="<?php the_sub_field('slide_image'); ?>" />
          <div class="carousel-headline-wrap">
            <h2 class="carousel-headline"><?php the_sub_field('slide_title'); ?></h2>
            <p class="carousel-subheading"><?php the_sub_field('slide_description'); ?></p>
            <?php if(get_sub_field('include_cta')){ ?>
              <a href="<?php the_sub_field('slide_cta_link'); ?>"><span class="lighter-grey-button"><?php  the_sub_field('slide_cta_label'); ?></span></a>
            <?php } ?>
          </div>
        </li>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- End of Front Page Slides Repeater -->
  </div>
  </div>
</div>
<div id="fp-testimonials-wrap">
  <div id="fp-testimonials" class="centered">
    <div id="fp-testimonials-seemore">
      <?php
      $header = get_field('header_1');
      $copy = get_field('copy_1');
      $cta = get_field('cta_1');
      $cta_link = get_field('cta_link_1');
      ?>
      <h4><?php echo $header ?></h4>
      <p><?php echo $copy ?></p>
      <a href="<?php echo $cta_link ?>"><span class="light-grey-button"><?php echo $cta ?></span></a>
    </div>
    <div id="fp-testimonials-seemore">
      <?php
      $header = get_field('header_2');
      $copy = get_field('copy_2');
      $cta = get_field('cta_2');
      $cta_link = get_field('cta_link_2');
      ?>
      <h4><?php echo $header ?></h4>
      <p><?php echo $copy ?></p>
      <a href="<?php echo $cta_link ?>"><span class="light-grey-button"><?php echo $cta ?></span></a>
    </div>
    <div id="fp-testimonials-seemore">
      <?php
      $header = get_field('header_3');
      $copy = get_field('copy_3');
      $cta = get_field('cta_3');
      $cta_link = get_field('cta_link_3');
      ?>
      <h4><?php echo $header ?></h4>
      <p><?php echo $copy ?></p>
      <a href="<?php echo $cta_link ?>"><span class="light-grey-button"><?php echo $cta ?></span></a>
    </div>
    <!-- <div id="fp-testimonials-logos">
      <img src="<?php bloginfo('template_url'); ?>/images/testimonials-client-logos.jpg">
      <button><?php //arrow button, may indicate that this is a slideshow of images with logos ?></button>
    </div> -->
  </div>
</div>
<?php get_footer(); ?>