<?php
/*
 * Template Name: Front Page
 */
get_header(); ?>
<div id="fp-slideshow-wrap">
  <div class="centered">
  <div class="example-orbit" data-orbit>
    <?php
      $post_type = 'frontpage_slides';
      $args = array(
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'ignore_sticky_posts'=> 1
      );
 
      $my_query = null;
      $my_query = new WP_Query($args);
      $testgroup = "A";
      if(isset($_GET['bgroup'])){ $testgroup = "B"; }
      if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post();
        $id = get_the_ID();
        if(get_field('test_group', $id) == $testgroup) {
        ?>
          <li>
            <img src="<?php the_field('slide_image', $id); ?>" />
            <div class="carousel-headline-wrap">
              <h2 class="carousel-headline"><?php the_field('slide_title', $id); ?></h2>
              <p class="carousel-subheading"><?php the_field('slide_description', $id); ?></p>
              <?php if($label = get_field('slide_cta_label', $id)){ ?>
                <a href="<?php the_field('slide_cta_link'); ?>"><span class="lighter-grey-button"><?php echo $label; ?></span></a>
              <?php } ?>
            </div>
          </li>
          <?php
        }
        endwhile;
      }
      wp_reset_query();
    ?>
  </div>
  </div>
</div>
<div id="fp-testimonials-wrap">
  <?php if (get_field('include_three_column')) { ?>
  <div id="fp-testimonials" class="grid-env centered">
    <?php if(get_field('three_column_data')): ?>
      <?php while(has_sub_field('three_column_data')): ?>
        <?php for($i = 1; $i <= 3; $i++) { ?>
          <div id="fp-testimonials-seemore">
          <?php if($header = get_sub_field('header_'.$i)) { ?>
            <h4><?php echo $header; ?></h4>
            <?php if($copy = get_sub_field('copy_'.$i)) { ?>
            <?php echo $copy; ?>
            <?php } ?>
            <?php if(($cta = get_sub_field('cta_'.$i)) && ($cta_link = get_sub_field('cta_link_'.$i))) { ?>
            <a href="<?php echo $cta_link; ?>"><span class="light-grey-button"><?php echo $cta; ?></span></a>
            <?php } } ?>
          <?php } ?>
          </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php } ?>
</div>
<?php get_footer(); ?>