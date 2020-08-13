<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  
  $boxShadowThemes = $site->box_shadow_themes();
?>

<?php if($boxShadowThemes->isNotEmpty()): ?>

  <?php foreach($boxShadowThemes->toStructure() as $boxShadowTheme): ?>

    <?php snippet('auf-style/box-shadow-theme', [
        'boxShadowTheme' => $boxShadowTheme, 
        'renderCssClass' => $renderCssClass,
        'wrapTag' => $wrapTag,
        'preview' => $preview
    ]); ?>

  <?php endforeach?>

<?php endif?>