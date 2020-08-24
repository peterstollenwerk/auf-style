<?php snippet('auf-style/site-header'); ?>

<h1><?= $page->title() ?></h1>

<p><a class="button" href="<?= url('style-tests') ?>">Go to Style Tests Page</a></p>

<hr>

<?php foreach($page->builder()->toBuilderBlocks() as $block): ?>

  <?php
      $snippetPathPrefix = 'auf-style/snippets/builder/';
      $snippetPath = $snippetPathPrefix . $block->_key();
  ?>

  <?= snippet($snippetPath, array('data' => $block)); ?>

<?php endforeach?>

<?php snippet('auf-style/site-footer'); ?>