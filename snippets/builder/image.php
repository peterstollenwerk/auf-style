<?php
  $src = $data->image()->toFile()->url();
  $alt = $data->alt();
  $cssClasses = $data->style_settings()->toCssClasses();
?>

<img src="<?= $src ?>" class="<?= $cssClasses ?>" alt="<?= $alt ?>" style="max-width: 100%;">
