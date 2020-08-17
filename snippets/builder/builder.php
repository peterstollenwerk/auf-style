<?php foreach($data->builder()->toBuilderBlocks() as $block): ?>

  <?php
    $snippetPathPrefix = 'auf-style/snippets/builder/';
    $snippetPath = $snippetPathPrefix . $block->_key();
  ?>

  <?= snippet($snippetPath, array('data' => $block)); ?>

<?php endforeach?>