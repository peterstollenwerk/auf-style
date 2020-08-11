<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $boxShadowThemes = $site->box_shadow_themes();
?>

<?php if($boxShadowThemes->isNotEmpty()): ?>

  <?php foreach($boxShadowThemes->toStructure() as $boxShadowTheme): ?>

  <?php 
      $uid = $boxShadowTheme->uid();
      $boxShadowThemeClass = 'box-shadow-theme--'. $uid;
  ?>

  <?php if($preview): ?>
    <article class="box outline <?= $boxShadowThemeClass ?>" style="min-height: 33vh;">
      <h3>.<?= $boxShadowThemeClass ?> <small>.box .outline</small></h3>
  <?php endif?>
  

  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  .<?= $boxShadowThemeClass ?> {
    
    /* harcoded for now */

  }
  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>

  <?php if($preview): ?>
    </article>
  <?php endif?>



  <?php endforeach?>
  
  

<?php endif?>