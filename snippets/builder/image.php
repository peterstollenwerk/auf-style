<?php


  $file = $data->image()->toFile();

  if($file == false )return;

  $src = $file->url();
  $alt = $data->alt();
  $cssClasses = $data->style_settings()->toCssClasses();
?>

<div class="<?= $cssClasses ?>">
  <img src="<?= $src ?>"  alt="<?= $alt ?>">
</div>