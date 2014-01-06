<?php
/*
 * Template Name: Leadership Page
 */
get_header(); ?>
<script type="text/javascript">
  $(document).ready(function(){
    var banner = $("#leadership-banner");
    var banner_o = banner.offset();
    var current_state = 0;
    var mark_h = $('#mark-highlight', banner);
    var bob_h = $('#bob-highlight', banner);
    var rob_h = $('#rob-highlight', banner);
    var content_divs = [$('#default-content'), $('#mark-content'), $('#bob-content'), $('#rob-content')];
    var sidebar_divs = [$('#default-sidebar'), $('#mark-sidebar'), $('#bob-sidebar'), $('#rob-sidebar')];
    banner.mousemove(function(e) {
      var relX = e.pageX - banner_o.left;
      var relY = e.pageY - banner_o.top;
      if((relX >= 350-270*(relY/455)) && (relX <= 1010-270*(relY/455))) {
        if(relX <= 570-270*(relY/455)) {
          if(current_state != 1)
          {
            current_state = 1;
            mark_h.show();
            bob_h.hide();
            rob_h.hide();
            for(var i = 0; i < 4; i++)
            {
              if(i == current_state) {
                content_divs[i].show();
                sidebar_divs[i].show();
              } else {
                content_divs[i].hide();
                sidebar_divs[i].hide();
              }
            }
          }
        } else if(relX <= 790-270*(relY/455)) {
          if(current_state != 2)
          {
            current_state = 2;
            bob_h.show();
            mark_h.hide();
            rob_h.hide();
            for(var i = 0; i < 4; i++)
            {
              if(i == current_state) {
                content_divs[i].show();
                sidebar_divs[i].show();
              } else {
                content_divs[i].hide();
                sidebar_divs[i].hide();
              }
            }
          }
        } else if(relX <= 1010-270*(relY/455)) {
          if(current_state != 3)
          {
            current_state = 3;
            rob_h.show();
            bob_h.hide();
            mark_h.hide();
            for(var i = 0; i < 4; i++)
            {
              if(i == current_state) {
                content_divs[i].show();
                sidebar_divs[i].show();
              } else {
                content_divs[i].hide();
                sidebar_divs[i].hide();
              }
            }
          }
        }   
      } else {
        if(current_state != 0)
        {
          current_state = 0;
          rob_h.hide();
          bob_h.hide();
          mark_h.hide();
          for(var i = 0; i < 4; i++)
          {
            if(i == current_state) {
              content_divs[i].show();
              sidebar_divs[i].show();
            } else {
              content_divs[i].hide();
              sidebar_divs[i].hide();
            }
          }
        }
      }
    });
  });
</script>
<div id="internal-wrap">
  <div id="leadership-banner-wrap">
    <div id="leadership-banner" class="centered">
      <img id="mark-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/mark.jpg" />
      <img id="bob-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/bob.jpg" />
      <img id="rob-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/rob.jpg" />
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