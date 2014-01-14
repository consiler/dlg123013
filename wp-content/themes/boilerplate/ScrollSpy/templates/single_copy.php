<?php
$copy = get_sub_field("copy");
$background_image = get_sub_field("background_image");
?>
<div class="layout-single-copy" style="background-image:url(<?php echo $block['background_image']['url']; ?>);height:<?php echo $block['background_image']['height']; ?>px;">
  <?php echo $block['copy']; ?>
</div>