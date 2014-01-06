<?php
/*
 * Template Name: K12 Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>