<?php snippet('auf-style/site-header'); ?>

<h1><?= $page->title() ?></h1>

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
  <h2 id="button-themes">Button-Themes</h2>
  <?= snippet('auf-style/button-themes', ['wrapTag' => 'pre', 'preview' => true]); ?>
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

<?php snippet('auf-style/site-footer'); ?>
