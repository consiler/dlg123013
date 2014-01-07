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
          <?php the_field('introduction_copy'); ?>
        </div>
        <div id="k12-promo-slider">
          <ul data-orbit>
            <li data-orbit-slide="headline-1">
              <div>
                <h2>Headline 1</h2>
                <h3>Subheadline</h3>
              </div>
            </li>
            <li data-orbit-slide="headline-2">
              <div>
                <h2>Headline 2</h2>
                <h3>Subheadline</h3>
              </div>
            </li>
          </ul>
        </div>
        <div id="k12-faculty">
          <?php the_field('faculty_copy'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>