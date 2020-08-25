<?php
if(!isset($typeTheme)) return;
$wrapTag = isset($wrapTag) ? $wrapTag : false;
$preview = isset($preview) ? $preview : false;
$renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 

  $autoidClass = 'type-theme--' . $typeTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $typeTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  $fontSize = (string) $typeTheme->font_size();

  $fontSizesMap = [
    'font-size--7'  => 'var(--size-7)',
    'font-size--6'  => 'var(--size-6)',
    'font-size--5'  => 'var(--size-5)',
    'font-size--4'  => 'var(--size-4)',
    'font-size--3'  => 'var(--size-3)',
    'font-size--2'  => 'var(--size-2)',
    'font-size--1'  => 'var(--size-1)',
    'font-size--0'  => 'var(--size-0)',
    'font-size---1' => 'var(--size--1)',
    'font-size---2' => 'var(--size--2)',
    'font-size---3' => 'var(--size--3)',
    'font-size---4' => 'var(--size--4)',
  ];

  $fontWeight = (string) $typeTheme->font_weight();

  $fontWeightMap = [
    'font-weight--normal' => 'normal',
    'font-weight--bold' => 'bold',
  ];
  
  $fontStyle = (string) $typeTheme->font_style();

  $fontStyleMap = [
    'font-style--normal' => 'normal',
    'font-style--italic' => 'italic',
  ];

$customTheme = $typeTheme->custom_theme();
?>

<?php if($preview): ?>
<article class="box">
  <h3 class="<?= $autoidClass ?>">h3.<?= $cssClass ?></h3>
<?php endif?>

<?php if($wrapTag): ?>
  <<?= $wrapTag ?> class="border-radius box-shadow--inset">
<?php endif?>

<?php if($renderCssClass): ?>
  .<?= $cssClass ?>
  {
<?php endif?>
    
  <?php if($fontSize): ?>--fontsize-factor: <?= $fontSizesMap[$fontSize] ?>;<?php endif?>

  <?php if($fontWeight): ?>font-weight: <?= $fontWeightMap[$fontWeight] ?>;<?php endif?>

  <?php if($fontWeight): ?>font-style: <?= $fontStyleMap[$fontStyle] ?>;<?php endif?>
  
  <?php if($customTheme->isNotEmpty()): ?><?= $customTheme ?><?php endif?>

<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>

<?php if($preview): ?>
</article>
<?php endif?>