<?php
  $text = $data->text()->kirbytext();

  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();
  
  $customClasses = $style->customClasses();

  var_dump($customClasses);

?>



<div class="<?= $cssClasses ?>" style="<?= $inlineStyle ?>">

  <?= $text ?>

</div>