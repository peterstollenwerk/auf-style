<?php


  $file = $data->image()->toFile();

  if($file == false )return;

  $src = $file->url();
  $alt = $data->alt();
  
  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();
?>

<div class="<?= $cssClasses ?>" style="<?= $style ?>">
  <img src="<?= $src ?>"  alt="<?= $alt ?>">
</div>