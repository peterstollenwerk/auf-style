<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  $colorThemes = $site->color_themes();
?>

<?php if($colorThemes->isNotEmpty()): ?>

  <?php foreach($colorThemes->toStructure() as $colorTheme): ?>

    <?php
    snippet('auf-style/color-theme', [
      'colorTheme' => $colorTheme, 
      'wrapTag' => $wrapTag,
      'preview' => $preview,
      'renderCssClass' => $renderCssClass,
      ]);
    ?>

  <?php endforeach?>

<?php endif?>