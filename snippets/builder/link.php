<?php

  $text = $data->text()->kirbytextinline();
  $url = $data->url();

  $type = $data->type();
  
  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();


?>
<a href="<?= $url ?>" class="<?= $type ?> <?= $cssClasses ?>" style="<?= $inlineStyle ?>">
  <?= $text ?>
</a>