<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : false;
  
  $customCssBlocks = $site->custom_css_blocks();

?>

<?php if($customCssBlocks->isNotEmpty()): ?>
  <?php foreach($customCssBlocks->toStructure() as $customCssBlock): ?>
  
    <?php if($customCssBlock->enabled()->toBool()): ?>
      <?= $customCssBlock->custom_css() ?>
    <?php endif?>

  <?php endforeach?>
<?php endif?>