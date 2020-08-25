<?php
  if(!isset($textShadowTheme)) return;
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 

  $autoidClass ='text-shadow-theme--' . $textShadowTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $textShadowTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  $textShadows = $textShadowTheme->text_shadows();

  $textShadow = ($textShadows->isNotEmpty()) ? $textShadows->toStructure()->first() : false;

  if(!$textShadow) return;

  $offsetX = $textShadow->offset_x();
  $offsetY = $textShadow->offset_y();
  $blurRadius = $textShadow->blur_radius();
?>

<?php if($preview): ?>
  <article 
    class="box <?= $autoidClass ?>" 
    style="min-height: 33vh;"
    >
    <h3 class="box <?= $autoidClass ?>">
      .<?= $cssClass ?> 
      <small>.box .outline</small>
    </h3>
<?php endif?>


<?php if($wrapTag): ?>
  <<?= $wrapTag ?>>
<?php endif?>

<?php if($renderCssClass): ?>
.<?= $cssClass ?> {
<?php endif?>
  
  <?php if($offsetX->isNotEmpty()): ?>--text-shadow-offset-x: <?= $offsetX ?>;<?php endif?>

  <?php if($offsetY->isNotEmpty()): ?>--text-shadow-offset-y: <?= $offsetY ?>;<?php endif?>
  
  <?php if($blurRadius->isNotEmpty()): ?>--text-shadow-blur-radius: <?= $blurRadius ?>;<?php endif?>
  

  --text-shadow: 
    var(--text-shadow-offset-x, 0px)
    var(--text-shadow-offset-y, 1px)
    var(--text-shadow-blur-radius, 1px)
    var(--text-shadow-color, rgba(0,0,0,0.5));


<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>

<?php if($preview): ?>
  </article>
<?php endif?>