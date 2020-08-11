<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUF | Styles Test Page</title>
  <?= snippet('auf-style/style'); ?>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1rem;
    }
    * + * {
      margin-top: var(--margin);
    }
    body > * {
      max-width: 666px;
      margin-left: auto;
      margin-right: auto;
    }
    pre { 
      overflow-x: auto;
    }
  </style>
</head>
<body class="page page--day-theme">

<h1><?= $page->title() ?></h1>

<nav>
  <h2>On this page</h2>
  <ol>
    <li><a href="#color-themes">Color-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#background-themes">Background-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#border-themes">Border-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#outline-themes">Outline-Themes</a>  ↓ ↓ ↓</li>
  </ol>
</nav>
<hr>

<section>
  <h2 id="color-themes">Color-Themes</h2>
  <?= snippet('auf-style/color-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
</section>

<section>
  <h2 id="background-themes">Background-Themes</h2>
  <?= snippet('auf-style/background-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
</section>
<hr>
  
<section>
  <h2 id="border-themes">Border-Themes</h2>
  <?= snippet('auf-style/border-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
</section>
<hr>

<section>
  <h2 id="outline-themes">Outline-Themes</h2>
  <?= snippet('auf-style/outline-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
</section>
<hr>

</body>
</html>
