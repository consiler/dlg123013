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
        <?php if(get_field('promo_slider')) { ?>
        <div id="k12-promo-slider">
          <div data-orbit data-options="animation:fade; timer:false; animation_speed:300; navigation_arrows:false; bullets_container_class:orbit-glowing-bullets; pause_on_hover:false; next_on_click:false; bullets:true; slide_number:false">
            <?php
            $slideNum = 0;
            while(has_sub_field('promo_slider')) {
              $slideNum++;
            ?>
            <li data-orbit-slide="promo-slide-<?php echo $slideNum; ?>">
              <div class="promo-slide">
                <div class="promo-slide-text">
                  <?php the_sub_field('slide_text'); ?>
                </div>
                <?php if(get_sub_field('promo_tile_sub_slider')) { ?>
                <div class="promo-slide-tile-slider">
                  <div class="nested-slider" data-options="animation:fade; timer:false; animation_speed:300; navigation_arrows:false; bullets_container_class:orbit-bullets; pause_on_hover:false; next_on_click:false; bullets:true; slide_number:false">
                    <?php
                    $tileSlideNum = 0;
                    while(has_sub_field('promo_tile_sub_slider')) {
                      $tileSlideNum++;
                      if($tileSlideNum >= 2) break;
                      $promo_object = get_sub_field('promo_tile');
                    ?>
                    <img src="<?php the_field('image', $promo_object->ID); ?>">
                    <?php } ?>
                  </div>
                </div>
                <?php } ?>
              </div>
            </li>
            <?php } ?>
          </div>
        </div>
        <? } ?>
        <div id="unslider-test">
        </div>
        <div id="k12-faculty">
          <?php the_field('faculty_copy'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery(document).foundation();
});
</script>
<?php get_footer(); ?>