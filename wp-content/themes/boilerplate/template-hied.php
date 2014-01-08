<?php
/*
 * Template Name: Higher Ed Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="hied-wrap">
        <div id="hied-intro">
          <?php the_field('introduction_copy'); ?>
        </div>
        <div id="hied-faculty">
          <?php the_field('faculty_copy'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>