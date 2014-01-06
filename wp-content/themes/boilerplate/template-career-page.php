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
        <h1><?php the_field('top_text'); ?></h1>
        <img src="<?php the_field('values_image');?>"/>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>