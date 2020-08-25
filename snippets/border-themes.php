<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;

  $borderThemes = $site->border_themes();
?>

<?php if($borderThemes->isNotEmpty()): ?>

  <?php foreach($borderThemes->toStructure() as $borderTheme): ?>

    <?php
    snippet('auf-style/border-theme', [
      'borderTheme' => $borderTheme, 
      'wrapTag' => $wrapTag,
      'preview' => $preview,
      'renderCssClass' => $renderCssClass,
      ]);
    ?>

  <?php endforeach?>
  
<?php endif?>