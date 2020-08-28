<?php


  $file = $data->image()->toFile();

  if($file == false )return;

  $src = $file->url();
  $alt = $data->alt();
  $cssClasses = $data->style_settings()->toCssClasses();
?>

<img src="<?= $src ?>" class="<?= $cssClasses ?>" alt="<?= $alt ?>" style="max-height: 50vh;">
