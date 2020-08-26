<?php
  $type = $data->type();
  $boxTheme = $data->box_theme();
  $getBoxThemeClass = function() use ($boxTheme){
    if($boxTheme->isEmpty()) {
      return '';
    }
    elseif($boxTheme == 'box') {
      return 'box';
    }
    elseif($boxTheme == 'box--inverted') {
      return 'box box--inverted';
    }
    else {
      return 'box box-theme--'. $boxTheme;
    }
  };

  $boxThemeClass = $getBoxThemeClass();

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