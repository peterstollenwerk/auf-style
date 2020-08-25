<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  
  $textShadowThemes = $site->text_shadow_themes();
?>

<?php if($textShadowThemes->isNotEmpty()): ?>

  <?php foreach($textShadowThemes->toStructure() as $textShadowTheme): ?>

    <?php snippet('auf-style/text-shadow-theme', [
        'textShadowTheme' => $textShadowTheme, 
        'renderCssClass' => $renderCssClass,
        'wrapTag' => $wrapTag,
        'preview' => $preview
    ]); ?>

  <?php endforeach?>

<?php endif?>