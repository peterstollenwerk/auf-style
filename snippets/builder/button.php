<?php
  $text = $data->text()->kirbytextinline();
  $url = $data->url();
  $cssClasses = $data->style_settings()->toCssClasses();
?>
<a class="<?= $cssClasses ?>" href="<?= $url ?>"><?= $text ?></a>