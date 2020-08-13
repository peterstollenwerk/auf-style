<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  $outlineThemes = $site->outline_themes();
?>

<?php if($outlineThemes->isNotEmpty()): ?>

  <?php foreach($outlineThemes->toStructure() as $outlineTheme): ?>

    <?php snippet('auf-style/outline-theme', [
        'outlineTheme' => $outlineTheme, 
        'renderCssClass' => $renderCssClass,
        'wrapTag' => $wrapTag,
        'preview' => $preview
    ]); ?>

  <?php endforeach?>

<?php endif?>