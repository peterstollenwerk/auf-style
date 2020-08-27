<?php
  use auf\Style;

  $text = $data->text()->kirbytextinline();
  $url = $data->url();

  $cssClasses = $data->style_settings()->toCssClasses();

?>
<a href="<?= $url ?>" class="<?= $cssClasses ?>">
  <?= $text ?>
</a>