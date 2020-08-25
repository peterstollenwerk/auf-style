<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  
  $typeThemes = $site->type_themes();
?>

<?php if($typeThemes->isNotEmpty()): ?>
  <?php foreach($typeThemes->toStructure() as $typeTheme): ?>

    <?= snippet('auf-style/type-theme', [
      'wrapTag' => $wrapTag,
      'preview' => $preview,
      'typeTheme' => $typeTheme,
      'renderCssClass' => $renderCssClass
    ]); ?>

  <?php endforeach?>
<?php endif?>