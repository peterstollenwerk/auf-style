<h1><?= $page->title() ?></h1>

<?php

  $colorThemes = $site->color_themes()->toStructure();

?>

<?php foreach($colorThemes as $theme): ?>

  <?php 
      $uid = $theme->uid();
      $css_class = '.color-theme--'. $uid;

      $color = $theme->color();
  ?>
  
  <pre>
    <?= $css_class ?> {
      
    <?php if($color->isNotEmpty()): ?>
    --color: <?= $color->toColor('hsl') ?>;
    <?php endif?>

    }
  </pre>

<?php endforeach?>


377
12:45