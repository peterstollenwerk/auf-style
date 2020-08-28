<?php

  $type = $data->type();
  $cssClasses = $data->style_settings()->toCssClasses();

?>

<?php if($type->isNotEmpty()): ?>

  <<?= $type ?> class="<?= $cssClasses ?>">

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