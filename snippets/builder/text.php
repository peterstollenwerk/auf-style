<?php
  $text = $data->text()->kirbytextinline();
  $type = $data->type();
  $boxTheme = $data->box_theme();
  $class= ($boxTheme->isNotEmpty()) ? 'box box-theme--'. $boxTheme . ' ' . $type : $type;
?>
<p class="<?= $class ?>">
  <?= $text ?>
</p>