<?php
if(!isset($boxTheme)) return;
$wrapTag = isset($wrapTag) ? $wrapTag : false;
$preview = isset($preview) ? $preview : false;
$renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 

  $autoidClass = option('auf.style.boxTheme.boxCssClassPrefix') . $boxTheme->autoid();
  $boxesClass = option('auf.style.boxTheme.boxesCssClassPrefix') . $boxTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $boxTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  $label = $boxTheme->label();
  $colorThemeAutoid = $boxTheme->color_theme();
  $backgroundThemeAutoid = $boxTheme->background_theme();
  $borderThemeAutoid = $boxTheme->border_theme();
  $outlineThemeAutoid = $boxTheme->outline_theme();
  $textShadowThemeAutoid = $boxTheme->text_shadow_theme();
  $boxShadowThemeAutoid = $boxTheme->box_shadow_theme();
  $customTheme = $boxTheme->custom_theme();
?>

<?php if($preview): ?>
  <section>
    <h3 class="font-size--0">Boxes Test</h3>
    <style> 
    .boxes-preview-1 {
      display: grid; grid-template-columns: repeat(3, 1fr); column-gap: 1rem;
    }
    .boxes-preview-1 > * {
      margin-top: initial;
    }
    </style>
    <ol class="boxes <?= $boxesClass ?> boxes-preview-1">
      <li>One</li>
      <li>Two</li>
      <li>Three</li>
    </ol>
  </section>
  <section>
    <h3 class="font-size--0">Box Test</h3>
  
  <article class="box <?= $autoidClass ?> border--outset">
    <h4>.<?= $cssClass ?></h3>
    <h5 class="font-size--0"><?= $label ?></h2>
    <button class="button--primary">.primary</button>
    <button class="button--secondary">.secondary</button>
    <button class="button--tertiary">.tertiary</button>
    <button>Default</button>
    <a class="button" href="https://aufdesign.de" target="_blank">a.button</a>
    <h4 class="safe-text">Headline</h4>
    <p> Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipisicing elit. Iure ad accusantium quis eligendi, perferendis molestias soluta neque quasi laudantium debitis dolores mollitia et voluptatibus modi velit beatae nulla cumque rerum!</p>
    <h4>.safe-text <small>.box-shadow--inset .border-radius</small></h4>
<?php endif?>

<?php if($wrapTag): ?>
  <<?= $wrapTag ?> class="box safe-text box-shadow--inset border-radius" style="border-radius: 0.618rem; --border-style: none;">
<?php endif?>

<?php if($renderCssClass): ?>
  .<?= $cssClass ?>,
  .<?= $boxesClass ?> > *
  {
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

<?php /* START: TEXT-SHADOW-THEME --------------------------*/ ?>
<?php if($textShadowThemeAutoid->isNotEmpty()): ?>
<?php 
  $textShadowTheme = $site->text_shadow_themes()->toStructure()->findBy('autoid', $textShadowThemeAutoid->toString()); 
  if(!$textShadowTheme) {
    echo '/* ERROR: text-shadow-theme »' . $textShadowThemeAutoid . '« NOT FOUND */';
  } else {
    echo '/* text-shadow-theme: ' . $textShadowThemeAutoid . ' */';
    snippet('auf-style/text-shadow-theme', [
      'textShadowTheme' => $textShadowTheme, 
      'renderCssClass' => false
    ]); }?>
<?php endif?>

<?php /* END: BOX-SHADOW-THEME --------------------------*/ ?>
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
  </section>
<?php endif?>