<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUF | Styles Test Page</title>
  <?= snippet('auf-style/style'); ?>
</head>
<body>

<h1><?= $page->title() ?></h1>
<section>
  <h2>Background Themes</h2>
  <?= snippet('auf-style/background-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
</section>
<section>
  <h2>Color Themes</h2>
  <?= snippet('auf-style/color-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
</section>
  
</body>
</html>
