<?php
/*
 * Template Name: Dynamic Page Template
 */
define('TEMPL_PATH','scrollspy/templates/');
function t_err($str) {
  echo '<div class="template-error">'.$str.'</div>';
}
get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/glide.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scrollspy.js"></script>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post();
  get_template_part('template', 'anchor-bar');
  ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <?php
      //Repeater: Anchor Groups
      if(get_field("anchor_groups")) {
        while(has_sub_field("anchor_groups")) {
          //Flexible Content: Blocks
          //Get anchor data for block group
          $anchor_name = get_sub_field("anchor_name");
          $anchor_id = get_sub_field("anchor_id");
          echo '<div id="'.$anchor_id.'-wrap">';
          foreach(get_sub_field("blocks") as $block) {
            //Flexible Content: Blocks
            $grl = $block['acf_fc_layout'];
            $allowed_layouts = array("single_copy", "copy_left_quote_right", "indexed_slider", "stats_copy_pt");
            if(in_array($grl, $allowed_layouts))
              include(TEMPL_PATH.$grl.".php");
            else
              t_err("Layout ".$grl." not in allowed layouts.");
          }
          echo '</div>';
        }
      } else {
        t_err("No Anchor Groups.");
      }
      ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/glide.js"></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/scrollspy.js'></script>
<script type="text/javascript">
$("#k12-promo-slider-orbit").on("ready.fndtn.orbit", function(event) {
  $('.slider').glide({
    autoplay: 5000,
    arrows: false,
    hoverpause: false
  });
  $('.orbit-glowing-bullets > li').each(function(i, blt) {
    $(this).html(''+(i+1));
  });
});
$(document).ready(function(){
  $(document).foundation();
  $('body').scrollspy({
    min: $('#anchor-bar-wrap').offset().top,
    max: 999999,
    onEnter: function(element, position) {
      $("#anchor-bar-wrap").addClass('fixed');
    },
    onLeave: function(element, position) {
      $("#anchor-bar-wrap").removeClass('fixed');
    }
  });
  $('#internal-lower > div').each(function(i) {
    var position = $(this).position();
    console.log(position);
    console.log('min: ' + position.top + ' / max: ' + parseInt(position.top + $(this).height()));
    $(this).scrollspy({
      min: position.top,
      max: position.top + $(this).height(),
      onEnter: function(element, position) {
        if(console) console.log('entering ' +  element.id);
        $("#"+element.id+"-watcher").addClass("active");
      },
      onLeave: function(element, position) {
        if(console) console.log('leaving ' +  element.id);
        $("#"+element.id+"-watcher").removeClass("active");
      }
    });
  });
});
</script>
<?php get_footer(); ?>