<?php
/*
 * Template Name: Leadership Page
 */
get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/leadership.js"></script>
<div id="internal-wrap">
  <div id="leadership-banner-bg">
    <div id="leadership-banner-wrap" class="centered">
      <div id="leadership-banner">
        <img id="mark-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/mark.jpg" />
        <img id="bob-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/bob.jpg" />
        <img id="rob-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/rob.jpg" />
      </div>
    </div>
  </div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered grid-env">
      <div id="leadership-main" class="row">
        <article class="large-6 large-offset-2 columns" id="leadership-main-content">
          <div id="default-content">
            <?php the_field('default_copy'); ?>
          </div>
          <div id="mark-content">
            <?php the_field('mark_copy'); ?>
          </div>
          <div id="bob-content">
            <?php the_field('bob_copy'); ?>
          </div>
          <div id="rob-content">
            <?php the_field('rob_copy'); ?>
          </div>
        </article>
        <aside class="large-4 columns" id="leadership-sidebar">
          <div id="default-sidebar">
            <div class="huge-text">50%+</div>
            <p>More than half of our clients are return customers. A repeat customer is someone you get to know.</p>
          </div>
          <div id="mark-sidebar">
            <div class="huge-text">$1B+</div>
            <p>As a corporate development executive, he has created over $1B in new venture revenue via acquisitions and alliances.</p>
          </div>
          <div id="bob-sidebar">
            <div class="huge-text">100+</div>
            <p>Bob has tied his own shoelaces over 100 times.</p>
          </div>
          <div id="rob-sidebar">
            <div class="huge-text">25K+</div>
            <p>Rob has inhaled over 25,000 times.</p>
          </div>
        </aside>
      </div>
      <?php get_template_part('template', 'right-sidebar'); ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>