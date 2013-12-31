      <?php if(get_field('has_sidebar')){ ?>
      <aside id="internal-sidebar">


      <!-- Start of Promo Tiles Repeater -->
      <?php if(get_field('right_sidebar_promo_tiles')): 
        $count = 0;
      ?>
        <?php while(has_sub_field('right_sidebar_promo_tiles')): ?>

        <div id="internal-sidebar-promo-tile">
          <?php echo $count;
            $count = $count+1;
            the_sub_field('promo_tile');
             ?>
          <a href=""><img src=""></a>
          </div>
       
          <!-- <li>sub_field_1 = <?php the_sub_field('sub_field_1'); ?>, sub_field_2 = <?php the_sub_field('sub_field_2'); ?>, etc</li> -->
       
        <?php endwhile; ?>
       
      <?php endif; ?>
      <!-- End of Promo Tiles Repeater -->

        <?php if(get_field('custom_html')){ ?>
          <div id="internal-sidebar-custom">
            <?php the_field('custom_html'); ?>
          </div>
        <?php } ?>
      </aside>
      <?php } ?>