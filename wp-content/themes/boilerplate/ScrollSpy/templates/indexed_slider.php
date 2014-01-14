<?php
if($slides == get_sub_field("slides")) {
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
?>