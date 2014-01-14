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
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="anchor-bar-wrap">
    <ul id="anchor-bar" class="centered">
      <li><a href="#">Example Anchor Link 1</a></li>
      <li><a href="#">Example Anchor Link 2</a></li>
    </ul>
  </div>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <?php
      //Repeater: Anchor Groups
      if(get_field("anchor_groups")) {
        while(has_sub_field("anchor_groups")) {
          //Flexible Content: Blocks
          foreach(get_sub_field("blocks") as $block) {
            //Get anchor data for block group
            $anchor_name = get_sub_field("anchor_name");
            $anchor_id = get_sub_field("anchor_id");
            //Flexible Content: Blocks
            echo '<div id="'.$anchor_id.'-wrap">';
            $grl = $block['acf_fc_layout'];
            $allowed_layouts = array("single_copy", "copy_left_quote_right", "indexed_slider", "stats_copy_pt");
            if(in_array($grl, $allowed_layouts))
              include(TEMPL_PATH.$grl.".php");
            else
              t_err("Layout ".$grl." not in allowed layouts.");
            echo '</div>';
          }
        }
      } else {
        t_err("No Anchor Groups.");
      }
      ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>