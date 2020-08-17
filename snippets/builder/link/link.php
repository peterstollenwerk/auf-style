<?php
  $text = $data->text()->kirbytextinline();
  $url = $data->url();
  $class = 'box box-theme--'. $data->box_theme();
?>
<a href="<?= $url ?>" class="<?= $class ?>"><?= $text ?></a>