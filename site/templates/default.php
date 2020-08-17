<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?></title>
  <?= snippet('auf-style/style'); ?>
</head>

<body class="page page--day-theme">
  
  <h1><?= $page->title() ?></h1>
  
  <p>
    <a href="<?= url('style-tests') ?>">
      <button>Go to Style Tests Page</button>
    </a>
  </p>
  
  <hr>

  <?php foreach($page->builder()->toBuilderBlocks() as $block): ?>

    <?= snippet($block->snippet_path(), array('data' => $block)); ?>

  <?php endforeach?>

</body>
</html>
