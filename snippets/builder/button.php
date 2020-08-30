<?php
  $text = $data->text()->kirbytextinline();
  $url = $data->url();
  
  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();

?>
<a class="<?= $cssClasses ?>" style="<?= $style ?>" href="<?= $url ?>"><?= $text ?></a>