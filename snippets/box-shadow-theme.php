<?php
  if(!isset($boxShadowTheme)) return;
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 
  $uid = $boxShadowTheme->uid();
  $boxShadowThemeClass = 'box-shadow-theme--'. $uid;

  $boxShadows = $boxShadowTheme->box_shadows();

  $boxShadow = ($boxShadows->isNotEmpty()) ? $boxShadows->toStructure()->first() : false;

  if(!$boxShadow) return;

  $offsetX = $boxShadow->offset_x();
  $offsetY = $boxShadow->offset_y();
  $blurRadius = $boxShadow->blur_radius();
  $spreadRadius = $boxShadow->spread_radius();
  $ambientOffsetX = $boxShadow->ambient_offset_x();
  $ambientOffsetY = $boxShadow->ambient_offset_y();
  $ambientBlurRadius = $boxShadow->ambient_blur_radius();
  $ambientSpreadRadius = $boxShadow->ambient_spread_radius();

?>

<?php if($preview): ?>
  <article 
    class="box <?= $boxShadowThemeClass ?>" 
    style="min-height: 33vh; --color: black; --background-color: pink;"
    >
    <h3>.<?= $boxShadowThemeClass ?> <small>.box .outline</small></h3>
<?php endif?>


<?php if($wrapTag): ?>
  <<?= $wrapTag ?>>
<?php endif?>

<?php if($renderCssClass): ?>
.<?= $boxShadowThemeClass ?> {
<?php endif?>
  
  <?php if($offsetY->isNotEmpty()): ?>--box-shadow-offset-y: <?= $offsetY ?>;<?php endif?>
  
  <?php if($blurRadius->isNotEmpty()): ?>--box-shadow-blur-radius: <?= $blurRadius ?>;<?php endif?>
  
  <?php if($spreadRadius->isNotEmpty()): ?>--box-shadow-spread-radius: <?= $spreadRadius ?>;<?php endif?>
  
  <?php if($ambientOffsetX->isNotEmpty()): ?>--box-shadow-ambient-offset-x: <?= $ambientOffsetX ?>;<?php endif?>
  
  <?php if($ambientOffsetY->isNotEmpty()): ?>--box-shadow-ambient-offset-y: <?= $ambientOffsetY ?>;<?php endif?>
  
  <?php if($ambientBlurRadius->isNotEmpty()): ?>--box-shadow-ambient-blur-radius: <?= $ambientBlurRadius ?>;<?php endif?>
  
  <?php if($ambientSpreadRadius->isNotEmpty()): ?>--box-shadow-ambient-spread-radius: <?= $ambientSpreadRadius ?>;<?php endif?>

<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>

<?php if($preview): ?>
  </article>
<?php endif?>