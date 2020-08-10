<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUF | Styles Test Page</title>
  <?= css('assets/css/auf-style.css') ?>
  <style>
    <?= snippet('auf-style/background-themes'); ?>
    <?= snippet('auf-style/color-themes'); ?>
  </style>
</head>
<body>

<h1><?= $page->title() ?></h1>

<?= snippet('auf-style/background-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
<?= snippet('auf-style/color-themes', ['wrapTag' => 'pre']); ?>
  
</body>
</html>
