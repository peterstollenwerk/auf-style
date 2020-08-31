<?php
  $text = $data->text()->kirbytext();

  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();
  
?>



<div class="<?= $cssClasses ?>" style="<?= $inlineStyle ?>">

  <?= $text ?>

</div>