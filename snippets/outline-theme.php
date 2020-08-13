<?php
  if(!isset($outlineTheme)) return;
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

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

<?php if($renderCssClass): ?>
  .<?= $outline_theme_class ?> {
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