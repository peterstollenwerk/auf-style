<?php

  $text = $data->text()->kirbytextinline();
  $url = $data->url();

  $type = $data->type();
  $cssClasses = $data->style_settings()->toCssClasses();

?>
<a href="<?= $url ?>" class="<?= $type ?> <?= $cssClasses ?>">
  <?= $text ?>
</a>