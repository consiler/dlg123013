<?php
/*
 * Template Name: Main Page Template
 */
get_header(); ?>
<div id="internal-wrap">
  <?php include 'internal_header.php'; ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="internal-main"<?php if(!get_field('has_sidebar')){ ?> class="internal-main-fullwidth"<?php } ?>>
        <?php
          include 'template-left-sidebar.php';
          include 'template-main-content.php';
        ?>
      </div>
      <?php include 'template-right-sidebar.php'; ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>