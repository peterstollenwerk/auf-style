<?php

  $type = $data->type();

  $style = $data->style_settings()->toStyle();
  $cssClasses = $style->toCssClasses();
  $inlineStyle = $style->inlineStyles();

?>

<?php if($type->isNotEmpty()): ?>

  <<?= $type ?> class="<?= $cssClasses ?>" style="<?= $style ?>">

  <?php endif?>

<?php foreach($data->builder()->toBuilderBlocks() as $block): ?>

  <?php
    $snippetPathPrefix = 'auf-style/snippets/builder/';
    $snippetPath = $snippetPathPrefix . $block->_key();
  ?>

  <?= snippet($snippetPath, array('data' => $block)); ?>

<?php endforeach?>

<?php if($type->isNotEmpty()): ?>

  </<?= $type ?>>

<?php endif?>