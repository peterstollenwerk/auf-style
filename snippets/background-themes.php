<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  
  $backgroundThemes = $site->background_themes();
?>

<?php if($backgroundThemes->isNotEmpty()): ?>

  <?php foreach($backgroundThemes->toStructure() as $themeIndex => $backgroundTheme): ?>

    <?php
    snippet('auf-style/background-theme', [
      'backgroundTheme' => $backgroundTheme, 
      'wrapTag' => $wrapTag,
      'preview' => $preview,
      'renderCssClass' => $renderCssClass,
      ]);
    ?>

  <?php endforeach?>

<?php endif?>