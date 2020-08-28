<?php

  use auf\Style;

  $blocks = $data->text()->blocks();
  
  $type = $data->type();
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $cssClasses = $data->style_settings()->toCssClasses();
?>

<header class="element--page-title <?= $cssClasses ?>">
  <?php foreach($blocks as $block): ?>
    <?php $block->attrs()->update(['class' => $cssClasses]); ?>
    <?= $block ?>
  <?php endforeach?>
</header>