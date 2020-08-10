<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $colorThemes = $site->color_themes();
?>

<?php if($colorThemes->isNotEmpty()): ?>

  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  <?php foreach($colorThemes->toStructure() as $colorTheme): ?>

  <?php 
      $uid = $colorTheme->uid();
      $css_class = '.color-theme--'. $uid;
      # colors
      $color = $colorTheme->color();
      $backgroundColor = $colorTheme->background();
      $borderColor = $colorTheme->border();
      $outlineColor = $colorTheme->outline();
      $textShadowColor = $colorTheme->text_shadow();
      $boxShadowColor = $colorTheme->box_shadow();
  ?>
  
    <?= $css_class ?> {
      
      <?php if($color->isNotEmpty()): ?>--color: <?= $color ?>;<?php endif?>

      <?php if($backgroundColor->isNotEmpty()): ?>--background-color: <?= $backgroundColor ?>;<?php endif?>
        
      <?php if($borderColor->isNotEmpty()): ?>--border-color: <?= $borderColor ?>;<?php endif?>
      
      <?php if($outlineColor->isNotEmpty()): ?>--outline-color: <?= $outlineColor ?>;<?php endif?>
      
      <?php if($textShadowColor->isNotEmpty()): ?>--text-shadow-color: <?= $textShadowColor ?>;<?php endif?>

      <?php if($boxShadowColor->isNotEmpty()): ?>--box-shadow-color: <?= $boxShadowColor ?>;<?php endif?>

    }


  <?php endforeach?>
  
  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>

<?php endif?>