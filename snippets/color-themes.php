<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $colorThemes = $site->color_themes();
?>

<?php if($colorThemes->isNotEmpty()): ?>

  

  <?php foreach($colorThemes->toStructure() as $colorTheme): ?>

  <?php 
      $uid = $colorTheme->uid();
      $css_class = 'color-theme--'. $uid;
      # colors
      $color = $colorTheme->color();
      $backgroundColor = $colorTheme->background();
      $borderColor = $colorTheme->border();
      $outlineColor = $colorTheme->outline();
      $textShadowColor = $colorTheme->text_shadow();
      $boxShadowColor = $colorTheme->box_shadow();
  ?>

  <?php if($preview): ?>
    <article class="box <?= $css_class ?>" style="min-height: 33vh">
      <h2>.<?= $css_class ?></h2>
      <p>Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipisicing elit. Dicta quod ea culpa, accusantium vel cumque quam earum corporis. Nobis quos veniam, architecto molestiae odio aspernatur amet enim optio soluta ipsum?</p>
  <?php endif?>
  

  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  .<?= $css_class ?> {
    
    <?php if($color->isNotEmpty()): ?>--color: <?= $color ?>;<?php endif?>

    <?php if($backgroundColor->isNotEmpty()): ?>--background-color: <?= $backgroundColor ?>;<?php endif?>
      
    <?php if($borderColor->isNotEmpty()): ?>--border-color: <?= $borderColor ?>;<?php endif?>
    
    <?php if($outlineColor->isNotEmpty()): ?>--outline-color: <?= $outlineColor ?>;<?php endif?>
    
    <?php if($textShadowColor->isNotEmpty()): ?>--text-shadow-color: <?= $textShadowColor ?>;<?php endif?>

    <?php if($boxShadowColor->isNotEmpty()): ?>--box-shadow-color: <?= $boxShadowColor ?>;<?php endif?>

  }


  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>
  
  <?php if($preview): ?>
    </article>
  <?php endif?>



  <?php endforeach?>
  
  

<?php endif?>