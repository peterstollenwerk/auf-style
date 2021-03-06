<?php

  use auf\Style;

  $blocks = $data->text()->blocks();
  
  $type = $data->type();
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();

?>

<header class="element--page-title <?= $cssClasses ?>" style="<?= $inlineStyle ?>">
  <?php foreach($blocks as $block): ?>
    <?php $block->attrs()->update(['class' => $cssClasses]); ?>
    <?= $block ?>
  <?php endforeach?>
</header>