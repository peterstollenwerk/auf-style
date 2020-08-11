<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $outlineThemes = $site->outline_themes();
?>

<?php if($outlineThemes->isNotEmpty()): ?>

  

  <?php foreach($outlineThemes->toStructure() as $outlineTheme): ?>

  <?php 
      $uid = $outlineTheme->uid();
      $outline_theme_class = 'outline-theme--'. $uid;
      $width = $outlineTheme->outline_width();
      $style = $outlineTheme->outline_style();
      $offset = $outlineTheme->outline_offset();
  ?>

  <?php if($preview): ?>
    <article class="box outline <?= $outline_theme_class ?>" style="min-height: 33vh;">
      <h3>.<?= $outline_theme_class ?> <small>.box .outline</small></h3>
  <?php endif?>
  

  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  .<?= $outline_theme_class ?> {
    <?php if($width->isNotEmpty()): ?>--outline-width: <?= $width ?>;<?php endif?>

    <?php if($style->isNotEmpty()): ?>--outline-style: <?= $style?>;<?php endif?>

    <?php if($offset->isNotEmpty()): ?>--outline-offset: <?= $offset ?>;<?php endif?>

  }
  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>

  <?php if($preview): ?>
    </article>
  <?php endif?>



  <?php endforeach?>
  
  

<?php endif?>