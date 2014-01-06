<?php
/*
 * Template Name: Careers Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="internal-main" class="internal-main-fullwidth">
        <div id="career-page">
          <h2><?php the_field('top_text'); ?></h2>
          <img src="<?php the_field('values_image');?>"/>
          <div id="career-learn-more">
            <a href="\our-team"><span class="light-grey-button">Learn more about our team</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>