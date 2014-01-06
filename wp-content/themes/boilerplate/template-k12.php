<?php
/*
 * Template Name: K12 Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="k12-wrap">
        <div id="k12-intro">
          <h2>Classrooms and Opportunities Transformed</h2>
          <p>;ladjsfniaprngkl;asd</p>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>