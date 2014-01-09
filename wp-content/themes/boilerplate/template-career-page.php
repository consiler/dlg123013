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
          <div id="career-learn-more-wrap">
            <div id="career-learn-more">
              <a href="\our-team"><span class="career-learn-more-button">Learn more about our team</span></a>
            </div>
          </div>
          <div id="value">
            <h2><?php the_field('center_text');?></h2>
            <h3><?php the_field('sub_center_text');?></h3>
          </div>
          <?php get_template_part('template', '3-columns'); ?>

          <div id="job-listings-wrap">
            <div id="open-jobs-image">
              <img id="open-jobs"src="<?php the_field('open_jobs_image')?>">
            </div>
            <div id="job-listings">
            <h2 id="position">Position</h2>
            <h2 id="location">Location</h2>
              <section id="jobs">            
                <? $args = array( 'post_type' => 'job_listings' );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <header class="jobs-header">
                      <div class="jobs-pos"><?php the_field('position');?></div>
                      <div class="jobs-loc"><?php the_field('location');?></div>
                      <div class="jobs-item-image">
                        <a href="#">
                          <img src="http://dialog.local/wp-content/uploads/2013/12/job-detail-button_16.png"/>
                        </a>
                      </div>
                      
                    </header>
                   <?php endwhile; ?>
                  

              </section>
             
            </div> 
            <div id="jobs-contact">
              <p>Please send all inquires to:</p>
              <a href="mailto:jobs@dialoggroup.com">Jobs@DialogGroup.com</a>
              </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>