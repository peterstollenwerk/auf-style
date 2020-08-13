<?php
if(!isset($boxTheme)) return;
$wrapTag = isset($wrapTag) ? $wrapTag : false;
$preview = isset($preview) ? $preview : false;
$renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 
  $uid = $boxTheme->uid();
  $css_class = 'box-theme--'. $uid;
  $colorThemeUid = $boxTheme->color_theme();
  $backgroundThemeUid = $boxTheme->background_theme();
  $borderThemeUid = $boxTheme->border_theme();
  $outlineThemeUid = $boxTheme->outline_theme();
  $boxShadowThemeUid = $boxTheme->box_shadow_theme();
  $customTheme = $boxTheme->custom_theme();
?>

<?php if($preview): ?>
  <article class="box <?= $css_class ?> border--outset">
    <h3 class="safe-text">.<?= $css_class ?> <span>.box .border--outset</span></h3>
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
.<?= $css_class ?> {
<?php endif?>
    
<?php /* START: COLOR THEME --------------------------*/ ?>
<?php if($colorThemeUid->isNotEmpty()): ?>
<?php 
  $colorTheme = $site->color_themes()->toStructure()->findBy('uid', $colorThemeUid->toString()); 
  if(!$colorTheme) {
    echo '/* ERROR: color-theme »' . $colorThemeUid . '« NOT FOUND */';
  } else {
    echo '/* color-theme: ' . $colorThemeUid . ' */';
    snippet('auf-style/color-theme', [
      'colorTheme' => $colorTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: COLOR THEME --------------------------*/ ?>

<?php /* START: BACKGROUND-THEME --------------------------*/ ?>
<?php if($backgroundThemeUid->isNotEmpty()): ?>
<?php 
  $backgroundTheme = $site->background_themes()->toStructure()->findBy('uid', $backgroundThemeUid->toString()); 
  if(!$backgroundTheme) {
    echo '/* ERROR: background-theme »' . $backgroundThemeUid . '« NOT FOUND */';
  } else {
    echo '/* background-theme: ' . $backgroundThemeUid . ' */';
    snippet('auf-style/background-theme', [
      'backgroundTheme' => $backgroundTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: BACKGROUND-THEME --------------------------*/ ?>

<?php /* START: BORDER-THEME --------------------------*/ ?>
<?php if($borderThemeUid->isNotEmpty()): ?>
<?php 
  $borderTheme = $site->border_themes()->toStructure()->findBy('uid', $borderThemeUid->toString()); 
  if(!$borderTheme) {
    echo '/* ERROR: border-theme »' . $borderThemeUid . '« NOT FOUND */';
  } else {
    echo '/* border-theme: ' . $borderThemeUid . ' */';
    snippet('auf-style/border-theme', [
      'borderTheme' => $borderTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: BORDER-THEME --------------------------*/ ?>

<?php /* START: OUTLINE-THEME --------------------------*/ ?>
<?php if($outlineThemeUid->isNotEmpty()): ?>
<?php 
  $outlineTheme = $site->outline_themes()->toStructure()->findBy('uid', $outlineThemeUid->toString()); 
  if(!$outlineTheme) {
    echo '/* ERROR: outline-theme »' . $outlineThemeUid . '« NOT FOUND */';
  } else {
    echo '/* outline-theme: ' . $outlineThemeUid . ' */';
    snippet('auf-style/outline-theme', [
      'outlineTheme' => $outlineTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>
<?php /* END: OUTLINE-THEME --------------------------*/ ?>

<?php /* START: BOX-SHADOW-THEME --------------------------*/ ?>
<?php if($boxShadowThemeUid->isNotEmpty()): ?>
<?php 
  $boxShadowTheme = $site->box_shadow_themes()->toStructure()->findBy('uid', $boxShadowThemeUid->toString()); 
  if(!$boxShadowTheme) {
    echo '/* ERROR: box-shadow-theme »' . $boxShadowThemeUid . '« NOT FOUND */';
  } else {
    echo '/* box-shadow-theme: ' . $boxShadowThemeUid . ' */';
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