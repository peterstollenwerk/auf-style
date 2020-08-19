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
    body {
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

<h1>Theme</h1>

<?= snippet('auf-style/page-theme-toggle-button'); ?>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores eum corporis soluta! Non quis rem quod blanditiis vel provident, magni dolorem at obcaecati eveniet! Optio animi aperiam voluptatibus ea.</p>

<section>
    <button>Default</button>
    <button class="button--primary">.primary</button>
    <button class="button--secondary">.secondary</button>
    <button class="button--tertiary">.tertiary</button>
    <a class="button button--primary" href="https://aufdesign.de" target="_blank">a.button</a>
    <a class="button button--secondary" href="https://aufdesign.de" target="_blank">a.button</a>
    <a class="button button--tertiary" href="https://aufdesign.de" target="_blank">a.button</a>
    <h4>.safe-text</h4>
    <p class="safe-text"> Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipisicing elit. Iure ad accusantium quis eligendi, perferendis molestias soluta neque quasi laudantium debitis dolores mollitia et voluptatibus modi velit beatae nulla cumque rerum!</p>
    <h4>.safe-text--extra <small>.box-shadow--inset .border-radius</small></h4>
</section>
<section class="box">
  <h2>.box</h2>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In unde veritatis, laudantium deserunt fugiat earum nesciunt amet nulla aliquam eum soluta iusto minus, sunt dolorum iste, sed illum assumenda. Ipsam!</p>
</section>
<section class="box box--inverted">
  <h2>.box.box--inverted</h2>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In unde veritatis, laudantium deserunt fugiat earum nesciunt amet nulla aliquam eum soluta iusto minus, sunt dolorum iste, sed illum assumenda. Ipsam!</p>
</section>
  
<h2>Box-Themes</h2>

<?= snippet('auf-style/box-themes', [
  'wrapTag' => 'article',
  'preview' => true
]); ?>

</body>
</html>
