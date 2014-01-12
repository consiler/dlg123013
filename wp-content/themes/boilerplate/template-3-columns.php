      <?php if (get_field('include_three_column')) { ?>
      <div id="three-column" class="grid-env">
        <?php if(get_field('three_column_data')): ?>
          <?php while(has_sub_field('three_column_data')): ?>
          <div class="row">
            <?php for($i = 1; $i <= 3; $i++) { ?>
              <div class="large-4 columns threecolumn-cell">
              <?php if($header = get_sub_field('header_'.$i)) { ?>
                <h4<?php  ?>><?php echo $header; echo get_page_template_slug( $post->ID ); ?></h4>
                <?php if($copy = get_sub_field('copy_'.$i)) { ?>
                <?php echo $copy; ?>
                <?php } ?>
                <?php if(($cta = get_sub_field('cta_'.$i)) && ($cta_link = get_sub_field('cta_link_'.$i))) { ?>
                <a href="<?php echo $cta_link; ?>"><span class="light-grey-button"><?php echo $cta; ?></span></a>
                <?php } } ?>
            </div>
            <?php } ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php } ?>