<?php

  use auf\Style;

  $blocks = $data->text()->blocks();
  
  $type = $data->type();
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();
  
?>


<div class="<?= $cssClasses ?>" style="<?= $style ?>">
<?php foreach($blocks as $block): ?>
  <?php $block->attrs()->update(['class' => $cssClasses]); ?>
    <?= $block ?>
  <?php endforeach?>
</div>