<!DOCTYPE html>
<html lang="en" class="site site--light" data-active-theme="site--light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?></title>
  
  <?= snippet('auf-style/style'); ?>

  <style>
    html > * {
      max-width: calc(var(--max-screensize) * 1px);
      margin-left: auto;
      margin-right: auto;
    }
  </style>

</head>
<body>
  
  <?= snippet('auf-style/theme-toggle-component'); ?>