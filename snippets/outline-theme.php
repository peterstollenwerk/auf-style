<?php
  if(!isset($outlineTheme)) return;
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 

  $autoidClass ='outline-theme--' . $outlineTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $outlineTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  $width = $outlineTheme->outline_width();
  $style = $outlineTheme->outline_style();
  $offset = $outlineTheme->outline_offset();
?>

<?php if($preview): ?>
  <article class="box outline <?= $autoidClass ?>" style="min-height: 33vh;">
    <h3>.<?= $cssClass ?> <small>.box .outline</small></h3>
<?php endif?>


<?php if($wrapTag): ?>
  <<?= $wrapTag ?>>
<?php endif?>

<?php if($renderCssClass): ?>
  .<?= $cssClass ?> {
<?php endif?>
    <?php if($width->isNotEmpty()): ?>--outline-width: <?= $width ?>;<?php endif?>

    <?php if($style->isNotEmpty()): ?>--outline-style: <?= $style?>;<?php endif?>

    <?php if($offset->isNotEmpty()): ?>--outline-offset: <?= $offset ?>;<?php endif?>

<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>

<?php if($preview): ?>
  </article>
<?php endif?>