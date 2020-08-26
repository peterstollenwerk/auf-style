<?php

  use auf\Style;

  $type = $data->type();
  $boxTheme = $data->box_theme();
  $boxThemeClass = Style::getBoxThemeClassByBoxTheme($boxTheme);

?>

<?php if($type->isNotEmpty()): ?>

  <<?= $type ?> class="<?= $boxThemeClass ?>">

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