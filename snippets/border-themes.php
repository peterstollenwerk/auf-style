<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $borderThemes = $site->border_themes();
?>

<?php if($borderThemes->isNotEmpty()): ?>

  

  <?php foreach($borderThemes->toStructure() as $borderTheme): ?>

  <?php 
      $uid = $borderTheme->uid();
      $border_theme_class = 'border-theme--'. $uid;
      $width = $borderTheme->border_width();
      $style = $borderTheme->border_style();
      $radius = $borderTheme->border_radius();
  ?>

  <?php if($preview): ?>
    <article class="box border border--outset <?= $border_theme_class ?>" style="min-height: 33vh;">
      <h3>.<?= $border_theme_class ?> <small>.box .border .border--outset</small></h3>
  <?php endif?>
  

  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  .<?= $border_theme_class ?> {
    <?php if($width->isNotEmpty()): ?>--border-width: <?= $width ?>;<?php endif?>

    <?php if($style->isNotEmpty()): ?>--border-style: <?= $style?>;<?php endif?>

    <?php if($radius->isNotEmpty()): ?>--border-radius: <?= $radius ?>;<?php endif?>

  }
  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>

  <?php if($preview): ?>
    </article>
  <?php endif?>



  <?php endforeach?>
  
  

<?php endif?>