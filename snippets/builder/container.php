<?php
  $type = $data->type();
  $boxTheme = $data->box_theme();
  $class= ($boxTheme->isNotEmpty()) ? 'box box-theme--'. $boxTheme . ' ' . $type : '';
?>


<?php if($type->isNotEmpty()): ?>
  <<?= $type ?> class="<?= $class ?>">
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