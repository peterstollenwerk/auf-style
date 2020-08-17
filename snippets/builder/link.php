<?php
  $text = $data->text()->kirbytextinline();
  $url = $data->url();
  $type = $data->type();
  $boxTheme = $data->box_theme();
  $class= ($boxTheme->isNotEmpty()) ? 'box box-theme--'. $boxTheme . ' ' . $type : $type;
?>
<a href="<?= $url ?>" class="<?= $class ?>">
  <?= $text ?>
</a>