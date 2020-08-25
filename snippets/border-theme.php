<?php
  if(!isset($borderTheme)) return;
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 

  $autoidClass ='border-theme--' . $borderTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $borderTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  $width = $borderTheme->border_width();
  $style = $borderTheme->border_style();
  $radius = $borderTheme->border_radius();
?>

<?php if($preview): ?>
  <article class="box <?= $autoidClass ?>" style="min-height: 33vh;">
    <h3>.<?= $cssClass ?></h3>
<?php endif?>


<?php if($wrapTag): ?>
  <<?= $wrapTag ?>>
<?php endif?>

<?php if($renderCssClass): ?>
  .<?= $cssClass ?> {
<?php endif?>

  <?php if($width->isNotEmpty()): ?>--border-width: <?= $width ?>;<?php endif?>

  <?php if($style->isNotEmpty()): ?>--border-style: <?= $style?>;<?php endif?>

  <?php if($radius->isNotEmpty()): ?>--border-radius: <?= $radius ?>;<?php endif?>

<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>

<?php if($preview): ?>
  </article>
<?php endif?>
