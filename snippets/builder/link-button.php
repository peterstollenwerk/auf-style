<?php
  $text = $data->text()->kirbytextinline();
  $url = $data->url();
  $class = 'button box-theme--'. $data->box_theme();
?>
<a class="<?= $class ?>" 
  href="<?= $url ?>"><?= $text ?></a>