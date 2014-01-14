<?php
$slideNum = 0;
foreach($block['slides'] as $s) {
  $slideNum++;
  $slide = $s['slide'][0];
  $grl = $slide['acf_fc_layout'];
  $allowed_layouts = array("copy_left_subslider_right", "single_copy_slide");
  if(in_array($grl, $allowed_layouts))
    include('indexed_slider/'.$grl.".php");
  else
    t_err("Layout ".$grl." not in allowed layouts.");
  echo '</li>';
}
?>