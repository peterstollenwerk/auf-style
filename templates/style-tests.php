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
<body class="page page-theme--light" data-active-theme="page-theme--light">

<h1><?= $page->title() ?></h1>

<?= snippet('auf-style/page-theme-toggle-button'); ?>

<nav class="box" style="--padding: 1rem 2rem;">
  <h2>On this page</h2>
  <ol>
    <li><a href="#button-themes">Button-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#color-themes">Color-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#background-themes">Background-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#border-themes">Border-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#outline-themes">Outline-Themes</a>  ↓ ↓ ↓</li>
    <li><a href="#box-shadow-themes">Box-Shadow-Themes</a>  ↓ ↓ ↓</li>
  </ol>
</nav>
<hr>

<br>

<section>
  <h2 id="button-themes">Button Themes</h2>
  <section class="box">
    <h2>default</h2>
    <button class="theme-toggle box-shadow-theme--level-1">default.box-shadow</button>
    <button class="theme-toggle button--secondary box-shadow-theme--level-1">.button--secondary</button>
    <button class="theme-toggle button--tertiary">.button-tertiary</button>
  </section>

  <section class="box color-theme--2">
    <h2>.color-theme--2</h2>
    <button class="theme-toggle box-shadow-theme--level-1">default.box-shadow</button>
    <button class="theme-toggle button--secondary box-shadow-theme--level-1">.button--secondary</button>
    <button class="theme-toggle button--tertiary">.button-tertiary</button>
  </section>

  <section class="box color-theme--1 background-theme--2">
    <h2>.color-theme--1 .background-theme--2</h2>
    <button class="theme-toggle box-shadow-theme--level-1">default.box-shadow</button>
    <button class="theme-toggle button--secondary box-shadow-theme--level-1">.button--secondary</button>
    <button class="theme-toggle button--tertiary">.button-tertiary</button>
  </section>
  
  <section class="box color-theme--2 background-theme--1">
    <h2>.color-theme--1 .background-theme--2</h2>
    <button class="theme-toggle box-shadow-theme--level-1">default.box-shadow</button>
    <button class="theme-toggle button--secondary box-shadow-theme--level-1">.button--secondary</button>
    <button class="theme-toggle button--tertiary">.button-tertiary</button>
  </section>

</section>

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

<section>
  <h2 id="box-shadow-themes">Box-Shadow-Themes</h2>
  <?= snippet('auf-style/box-shadow-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
</section>
<hr>

</body>
</html>
