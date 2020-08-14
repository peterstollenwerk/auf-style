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

<nav>
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

<section>
  <h1>Headline Level 1</h1>
  <h2>Headline Level 2</h2>
  <h3>Headline Level 3</h3>
  <h4>Headline Level 4</h4>
  <h5>Headline Level 5</h5>
  <h6>Headline Level 6</h6>
</section>


<section>
  <h2 id="button-themes">Button Themes</h2>
  <h3>Buttons</h3>
  <button>button</button>
  <button class="button--primary">button.button--crazy</button>
  <button class="button--secondary">button.button--crazy</button>
  <button class="button--tertiary">button.button--crazy</button>
  <h3>Links</h3>
  <a href="#">Some Hyperlink</a>
  <a href="#" class="button">a.button</a>
  <a href="#" class="button button--primary">a.button.button--primary</a>
  <a href="#" class="button button--secondary">a.button.button--secondary</a>
  <a href="#" class="button button--tertiary">a.button.button--tertiary</a>
</section>

<section>

  <section class="box">
    <h2>default</h2>
    <button class="button--primary">default.box-shadow</button>
    <button class="button--secondary">.button--secondary</button>
    <button class="button--tertiary">.button-tertiary</button>
  </section>

  <section class="box color-theme--2">
    <h2>.color-theme--2</h2>
    <button class="button--primary">default.box-shadow</button>
    <button class="button--secondary">.button--secondary</button>
    <button class="button--tertiary">.button-tertiary</button>
  </section>

  <section class="box color-theme--1 background-theme--2">
    <h2>.color-theme--1 .background-theme--2</h2>
    <button class="button--primary">default.box-shadow</button>
    <button class="button--secondary">.button--secondary</button>
    <button class="button--tertiary">.button-tertiary</button>
  </section>
  
  <section class="box color-theme--2 background-theme--1">
    <h2>.color-theme--1 .background-theme--2</h2>
    <button class="theme-toggle button--primary">default.box-shadow</button>
    <button class="theme-toggle button--secondary">.button--secondary</button>
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

</body>
</html>
