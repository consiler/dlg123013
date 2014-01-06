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
    banner.mousemove(function(e) {
      var relX = e.pageX - banner_o.left;
      var relY = e.pageY - banner_o.top;
      if((relX >= 350-270*(relY/455)) && (relX <= 1010-270*(relY/455))) {
        if(relX <= 570-270*(relY/455)) {
          console.log("Mark: "+relX+","+relY);
          if(current_state != 1)
          {
            current_state = 1;
            mark_h.show();
            bob_h.hide();
            rob_h.hide();
          }
        } else if(relX <= 790-270*(relY/455)) {
          console.log("Bob: "+relX+","+relY);
          if(current_state != 2)
          {
            current_state = 2;
            bob_h.show();
            mark_h.hide();
            rob_h.hide();
          }
        } else if(relX <= 1010-270*(relY/455)) {
          console.log("Rob: "+relX+","+relY);
          if(current_state != 3)
          {
            current_state = 3;
            rob_h.show();
            bob_h.hide();
            mark_h.hide();
          }
        }
      } else {
        if(current_state != 0)
        {
          rob_h.hide();
          bob_h.hide();
          mark_h.hide();
        }
      }
    });
  });
</script>
<div id="internal-wrap">
  <div id="leadership-banner-wrap" class="centered">
    <div id="leadership-banner">
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
          some content
        </article>
        <aside class="large-4 columns" id="leadership-sidebar">
          <span class="huge-text">
            50%+
          </span>
          <p>More than half of our clients are return customers.</p>
        </aside>
      </div>
      <?php get_template_part('template', 'right-sidebar'); ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>