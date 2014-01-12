<?php
/*
 * Template Name: Story Page
 */

get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'large-internal-header'); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="story-wrap">
        <div id="story-promo-slider">
          <div id="story-promo-slider-orbit" data-orbit data-options="animation:fade; timer:false; animation_speed:300; navigation_arrows:false; bullets_container_class:orbit-glowing-bullets; pause_on_hover:false; next_on_click:false; bullets:true; slide_number:false">
            <li id="pse-slide" data-orbit-slide="pse">
              <div class="promo-slide">
                <div class="promo-slide-text">
                  <h2>Our Vision: Clarity, Alignment and Flexiblity</h2>
                  <p>Dialog pursues clarity and precise alignment across purpose, strategy and execution. We can help you rebuild your organization around ever shortening strategy and execution cycles.</p>
                </div>
              </div>
            </li>
            <li id="approach-slide" data-orbit-slide="approach">
              <div class="promo-slide">
                <div class="promo-slide-text">
                  <h2>Our Approach: Analysis, Expertise and Advice.</h2>
                  <p>Dialog leaders have 20+ years experience combining top tier strategy consulting, digital agency creativity, and general management and marketing consulting work.</p>
                  <img src="<?php bloginfo('template_url'); ?>/images/story/agency-consultancy.png">
                </div>
                <div class="promo-slide-tile-slider-wrap">
                  <div class="promo-slide-tile-slider">
                    <ul>
                      <li><div class="promo-slide-imgwrap"><img src="<?php bloginfo('template_url'); ?>/images/story/subsl1.png"><div></li>
                      <li><div class="promo-slide-imgwrap"><img src="<?php bloginfo('template_url'); ?>/images/story/subsl2.png"><div></li>
                      <li><div class="promo-slide-imgwrap"><img src="<?php bloginfo('template_url'); ?>/images/story/subsl3.png"><div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </div>
        </div>
        <div id="story-our-clients">
          <div id="story-our-clients-copy">
            <h2>Our Clients: Upstarts, Blue Chips and Pioneers.</h2>
            <p>We serve a client base that is as large and varied as our skill set.  Global brand leaders in technology, hospitality, and healthcare, along with emerging leaders in diverse spaces all rely on Dialog for our ability to help them quickly identify and act on new opportunities for growth.</p>
          </div>
          <div id="story-our-clients-testimonial-slider">
            <blockquote>&ldquo;I’ve never had greater trust in a marketing partner. Dialog always has my best interest in mind, and is a partner in the truest sense.  Their ability to marry “deep strategy” with an unmatched depth of experience in Healthcare, Education and Government is a home run for anyone marketing in these markets. They are my go-to partner for Public Sector expertise.&rdquo;</blockquote>
            <div class="testifier-name">Frances Fortanley</div>
            <div class="testifier-title">Marketing Director, VMWare</div>
          </div>
        </div>
        <div id="story-what-we-do">
          <h2>What We Do: Growth Acceleration</h2>
          <p>Dialog helps clients leverage change as an advantage and engine of innovation across their entire business, building breakthrough opportunities for market domination.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/unslider.js"></script>
<script type="text/javascript">
$("#story-promo-slider-orbit").on("ready.fndtn.orbit", function(event) {
  $('.orbit-glowing-bullets > li').each(function(i, blt) {
    $(this).html(''+(i+1));
  });
  $('.promo-slide-tile-slider').unslider({dots: true, speed:1000, delay:5000});
});
$(document).ready(function(){
  $(document).foundation();
});
</script>
<?php get_footer(); ?>