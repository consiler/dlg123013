<?php $copy = $slide["copy"]; ?>
<li data-orbit-slide="promo-slide-<?php echo $slideNum; ?>">
<div class="promo-slide">
  <div class="promo-slide-text">
    <?php echo $copy; ?>
  </div>
  <div class="promo-slide-tile-slider-wrap">
    <div class="promo-slide-tile-slider">
      <ul>
        <?php
          foreach($slide['subslider'] as $subslide) {
            if($promo_object = $subslide['promo_tile']) {
              ?>
              <li><div class="promo-slide-imgwrap"><a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a><div></li>
              <?php
            } elseif($image = $subslide["image"]) {
              //todo
            } elseif($scopy = $subslide["copy"]) {
              //todo
            }
          }
        ?>
      </ul>
    </div>
  </div>
</div>
</li>