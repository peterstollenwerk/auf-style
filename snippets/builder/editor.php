<?php

  use auf\Style;

  $blocks = $data->text()->blocks();
  
  $type = $data->type();
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $cssClasses = $data->style_settings()->toCssClasses();
?>


<div class="<?= $cssClasses ?>">
<?php foreach($blocks as $block): ?>
  <?php $block->attrs()->update(['class' => $cssClasses]); ?>
    <?= $block ?>
  <?php endforeach?>
</div>