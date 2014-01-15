<div id="anchor-bar-wrap">
  <ul id="anchor-bar" class="centered">
  <?php
  if(get_field("anchor_groups")) {
      while(has_sub_field("anchor_groups")) {
        //Flexible Content: Blocks
        //Get anchor data for block group
        $anchor_name = get_sub_field("anchor_name");
        $anchor_id = get_sub_field("anchor_id");
  ?>
    <li id="<?php echo $anchor_id; ?>-wrap-watcher"><a href="#<?php echo $anchor_id; ?>-wrap"><?php echo $anchor_name; ?></a></li>
  <?php } } ?>
  </ul>
</div>