<?php
if(!isset($boxTheme)) return;
$wrapTag = isset($wrapTag) ? $wrapTag : false;
$preview = isset($preview) ? $preview : false;
$renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 

  $autoidClass ='box-theme--' . $boxTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $boxTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  $label = $boxTheme->label();
  $colorThemeAutoid = $boxTheme->color_theme();
  $backgroundThemeAutoid = $boxTheme->background_theme();
  $borderThemeAutoid = $boxTheme->border_theme();
  $outlineThemeAutoid = $boxTheme->outline_theme();
  $boxShadowThemeAutoid = $boxTheme->box_shadow_theme();
  $customTheme = $boxTheme->custom_theme();
?>

<?php if($preview): ?>
  <article class="box <?= $autoidClass ?> border--outset">
    <h3 class="safe-text">.<?= $cssClass ?></h3>
    <h2><?= $label ?></h2>
    <button class="button--primary">.primary</button>
    <button class="button--secondary">.secondary</button>
    <button class="button--tertiary">.tertiary</button>
    <button>Default</button>
    <a class="button" href="https://aufdesign.de" target="_blank">a.button</a>
    <h4>.safe-text</h4>
    <p class="safe-text"> Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipisicing elit. Iure ad accusantium quis eligendi, perferendis molestias soluta neque quasi laudantium debitis dolores mollitia et voluptatibus modi velit beatae nulla cumque rerum!</p>
    <h4>.safe-text--extra <small>.box-shadow--inset .border-radius</small></h4>
<?php endif?>

<?php if($wrapTag): ?>
  <<?= $wrapTag ?> class="safe-text--extra box-shadow--inset border-radius">
<?php endif?>

<?php if($renderCssClass): ?>
  .<?= $cssClass ?> {
<?php endif?>
    
<?php /* START: COLOR THEME --------------------------*/ ?>
<?php if($colorThemeAutoid->isNotEmpty()): ?>
<?php 
  $colorTheme = $site->color_themes()->toStructure()->findBy('autoid', $colorThemeAutoid->toString()); 
  if(!$colorTheme) {
    echo '/* ERROR: color-theme »' . $colorThemeAutoid . '« NOT FOUND */';
  } else {
    echo '/* color-theme: ' . $colorThemeAutoid . ' */';
    snippet('auf-style/color-theme', [
      'colorTheme' => $colorTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: COLOR THEME --------------------------*/ ?>

<?php /* START: BACKGROUND-THEME --------------------------*/ ?>
<?php if($backgroundThemeAutoid->isNotEmpty()): ?>
<?php 
  $backgroundTheme = $site->background_themes()->toStructure()->findBy('autoid', $backgroundThemeAutoid->toString()); 
  if(!$backgroundTheme) {
    echo '/* ERROR: background-theme »' . $backgroundThemeAutoid . '« NOT FOUND */';
  } else {
    echo '/* background-theme: ' . $backgroundThemeAutoid . ' */';
    snippet('auf-style/background-theme', [
      'backgroundTheme' => $backgroundTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: BACKGROUND-THEME --------------------------*/ ?>

<?php /* START: BORDER-THEME --------------------------*/ ?>
<?php if($borderThemeAutoid->isNotEmpty()): ?>
<?php 
  $borderTheme = $site->border_themes()->toStructure()->findBy('autoid', $borderThemeAutoid->toString()); 
  if(!$borderTheme) {
    echo '/* ERROR: border-theme »' . $borderThemeAutoid . '« NOT FOUND */';
  } else {
    echo '/* border-theme: ' . $borderThemeAutoid . ' */';
    snippet('auf-style/border-theme', [
      'borderTheme' => $borderTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: BORDER-THEME --------------------------*/ ?>

<?php /* START: OUTLINE-THEME --------------------------*/ ?>
<?php if($outlineThemeAutoid->isNotEmpty()): ?>
<?php 
  $outlineTheme = $site->outline_themes()->toStructure()->findBy('autoid', $outlineThemeAutoid->toString()); 
  if(!$outlineTheme) {
    echo '/* ERROR: outline-theme »' . $outlineThemeAutoid . '« NOT FOUND */';
  } else {
    echo '/* outline-theme: ' . $outlineThemeAutoid . ' */';
    snippet('auf-style/outline-theme', [
      'outlineTheme' => $outlineTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: OUTLINE-THEME --------------------------*/ ?>

<?php /* START: BOX-SHADOW-THEME --------------------------*/ ?>
<?php if($boxShadowThemeAutoid->isNotEmpty()): ?>
<?php 
  $boxShadowTheme = $site->box_shadow_themes()->toStructure()->findBy('autoid', $boxShadowThemeAutoid->toString()); 
  if(!$boxShadowTheme) {
    echo '/* ERROR: box-shadow-theme »' . $boxShadowThemeAutoid . '« NOT FOUND */';
  } else {
    echo '/* box-shadow-theme: ' . $boxShadowThemeAutoid . ' */';
    snippet('auf-style/box-shadow-theme', [
      'boxShadowTheme' => $boxShadowTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>

<?php /* END: BOX-SHADOW-THEME --------------------------*/ ?>

<?php /* START: CUSTOM-THEME --------------------------*/ ?>
<?php if($customTheme->isNotEmpty()): ?>
  <?= $customTheme ?>
<?php endif?>

<?php /* END: CUSTOM-THEME --------------------------*/ ?>

<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>

<?php if($preview): ?>
  </article>
<?php endif?>