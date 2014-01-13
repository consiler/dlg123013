<?php
/*
 * Template Name: Dynamic Page Template
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="anchor-bar-wrap">
    <ul id="anchor-bar" class="centered">
      <!-- Style this!!! -->
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
          if(get_sub_field("blocks")){
            //Get anchor data for block group
            $anchor_name = get_sub_field("anchor_name");
            $anchor_id = get_sub_field("anchor_id");
            //Flexible Content: Blocks
            while(has_sub_field("blocks")):
              ?>
      <div id="<?php echo $anchor_id; ?>-wrap">
              <?php
              if(get_row_layout() == "single_copy") {
                $copy = get_sub_field("copy");
                $background_image = get_sub_field("background_image");
              } elseif(get_row_layout() == "copy_left_quote_right") {
                $copy = get_sub_field("copy");
                $quote = get_sub_field("quote");
                $quoted_person_name = get_sub_field("quoted_person_name");
                $quoted_person_title = get_sub_field("quoted_person_title");
              } elseif(get_row_layout() == "indexed_slider") {
                if($slides == get_sub_field("slides")){
                  while(has_sub_field("slides")) {
                    if($slide = get_sub_field("slide")) {
                      while(has_sub_field("slide")) {
                        if(get_row_layout() == "single_copy_slide") {
                          $copy = get_sub_field("copy");
                        } elseif(get_row_layout() == "copy_left_subslider_right") {
                          $copy = get_sub_field("copy");
                          if(get_sub_field("subslider")) {
                            while(has_sub_field("subslider")) {
                              if($promo_tile = get_sub_field("promo_tile")) {
                                ?>
                                <a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a>
                                <?php
                              } elseif($image = get_sub_field("image")) {
                                ?>
                                <img src="<?php echo $image; ?>" />
                                <?php
                              } elseif($copy = get_sub_field("copy")) {
                                echo $copy;
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              } elseif(get_row_layout() == "stats_copy_pt") {
                //post object for other promo tile
                $wide_promotile = get_sub_field("wide_promotile");
                ?>
                <div id="hied-opportunity">
                  <div id="hied-opportunity-main">
                    <div id="hied-opportunity-stats-wrap">
                      <div class="huge-text"><?php the_sub_field('stat_1'); ?></div>
                      <p><?php the_sub_field('stat_1_caption'); ?></p>
                      <div class="seperator"></div>
                      <div class="huge-text"><?php the_sub_field('stat_2'); ?></div>
                      <p><?php the_sub_field('stat_2_caption'); ?></p>
                    </div>
                    <div id="hied-opportunity-copy">
                      <?php the_sub_field('copy'); ?>
                    </div>
                  </div>
                  <div class="seperator"></div>
                  <div id="hied-opportunity-promos">
                    <div id="hied-opportunity-promos-tile-1">
                      <ul class="promotile-slider">
                        <?php while(has_sub_field('promotile_slider')){
                            if($promo_object = get_sub_field('promo_tile')){
                               ?>
                        <li><a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a></li>
                               <?php
                            }
                          } ?>
                      </ul>
                    </div>
                    <div id="hied-opportunity-promos-tile-2">
                      <a href="mailto:education@dialoggroup.com"><img src="<?php bloginfo('template_url'); ?>/images/hied/hied-trade-shows.gif"></a>
                    </div>
                  </div>
                </div>
                <?php
              } // End Block Layout Cases
              ?>
      </div>
              <?php
            endwhile; // End "Blocks" While Loop
          }
        }
      }
      ?>
      <div id="-wrap">
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>