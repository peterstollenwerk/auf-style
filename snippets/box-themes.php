<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  
  $boxThemes = $site->box_themes();
?>

<?php if($boxThemes->isNotEmpty()): ?>
  <?php foreach($boxThemes->toStructure() as $boxTheme): ?>
  
    <?= snippet('auf-style/box-theme', [
      'wrapTag' => $wrapTag,
      'preview' => $preview,
      'boxTheme' => $boxTheme,
      'renderCssClass' => $renderCssClass
    ]); ?>

  <?php endforeach?>
<?php endif?>