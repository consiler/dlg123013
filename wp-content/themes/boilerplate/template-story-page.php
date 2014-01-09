<?php
/*
 * Template Name: Story Page
 */

get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>

    <div id="k12-intro" style="background:url(<?php the_field('intro_bg'); ?>); background-repeat: no-repeat; background-position:right;">
      <?php the_field('introduction_copy'); ?>
    </div>




<!-- Start of blocks -->

<div id="story-block" class="dg-even" style="display:none;">
  <div class="container" style="height:200px">
  </div> 
</div>


<div id="story-block" class="dg-bg bg3">
  <div class="container">
    <div class="sectionhead" style="background:url(<?php the_field('storybg_1'); ?>); background-repeat: no-repeat; background-position:center;">
      <header>
      <?php
      $header_1 = get_field('header_1');
      $subheader_1 = get_field('subheader_1');
      ?>
      <h1><?php echo $header_1 ?></h1>
      <h2><?php echo $subheader_1 ?></h2>
    </header>
    </div>
  </div> 
</div>

<div id="story-block" class="dg-odd">
  <div class="container">
    <div id="vision" style="background:url(<?php the_field('vision'); ?>); background-repeat: no-repeat; background-position: center;">
  </div> 
</div>

<div id="story-block" class="dg-bg bg1">
  <div class="container">
    <div class="sectionhead" style="background:url(<?php the_field('storybg_2'); ?>); background-repeat: no-repeat; background-position:center;">
      <header>
      <?php
      $header_2 = get_field('header_2');
      $subheader_2 = get_field('subheader_2');
      ?>
      <h1><?php echo $header_2 ?></h1>
      <h2><?php echo $subheader_2 ?></h2>
    </header>
    </div>
  </div> 
</div>

<div id="story-block" class="dg-odd">
  <div class="container">
    <div id="approach"style="background:url(<?php the_field('approach'); ?>); background-repeat: no-repeat; background-position: center;">
  </div> 
</div>

<div id="story-block" class="dg-bg bg2">
  <div class="container">
    <div class="sectionhead" style="background:url(<?php the_field('storybg_3'); ?>); background-repeat: no-repeat; background-position:center;">
      <header>
      <?php
      $header_3 = get_field('header_3');
      $subheader_3 = get_field('subheader_3');
      ?>
      <h1><?php echo $header_3 ?></h1>
      <h2><?php echo $subheader_3 ?></h2>
    </header>
    </div>
  </div> 
</div>

<div id="story-block" class="dg-odd">
  <div class="container">
    <div id="do" style="background:url(<?php the_field('whatwedo'); ?>); background-repeat: no-repeat; background-position: center;">
  </div> 
</div>




<!-- End of blocks -->





</div>
<?php get_footer(); ?>