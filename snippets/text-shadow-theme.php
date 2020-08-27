<?php
  if(!isset($textShadowTheme)) return;
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 

  $autoidClass ='text-shadow-theme--' . $textShadowTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $textShadowTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  
?>

<?php if($preview): ?>
  <article 
    class="box <?= $autoidClass ?>" 
    style="min-height: 33vh;"
    >
    <h3 class="box <?= $autoidClass ?>" style="--text-shadow-color: red;">
      .<?= $cssClass ?> 
      <small>.box style="--text-shadow-color: red;"</small>
    </h3>
<?php endif?>


<?php if($wrapTag): ?>
  <<?= $wrapTag ?>>
<?php endif?>

<?php if($renderCssClass): ?>
.<?= $cssClass ?> {
<?php endif?>

  <?php
    $textShadows = $textShadowTheme->text_shadows()->toStructure();
  ?>

<?php foreach($textShadows as $i => $textShadow): ?>

  <?php 
    $i += 1;  
    $offsetX = $textShadow->offset_x();
    $offsetY = $textShadow->offset_y();
    $blurRadius = $textShadow->blur_radius();
  ?>


  
  <?php if($offsetX->isNotEmpty()): ?>--text-shadow-offset-x-<?= $i ?>: <?= $offsetX ?>;<?php endif?>

  <?php if($offsetY->isNotEmpty()): ?>--text-shadow-offset-y-<?= $i ?>: <?= $offsetY ?>;<?php endif?>
  
  <?php if($blurRadius->isNotEmpty()): ?>--text-shadow-blur-radius-<?= $i ?>: <?= $blurRadius ?>;<?php endif?>
  

  --text-shadow-<?= $i ?>: 
    var(--text-shadow-offset-x-<?= $i ?>, 0px)
    var(--text-shadow-offset-y-<?= $i ?>, 1px)
    var(--text-shadow-blur-radius-<?= $i ?>, 1px)
    var(--text-shadow-color, rgba(0,0,0,0.5));

<?php endforeach?>
<?php
  $getTextShadowVariable = function($numberOfShadows) {
    $vars = [];
    for($i = $numberOfShadows; $i > 0; $i--) {
      $var = 'var(--text-shadow-'.$i.')';
      array_push($vars, $var);
    }
    return implode(',', $vars);
  };
  
  $textShadowVariable = $getTextShadowVariable($textShadows->count());
?>

text-shadow: <?= $textShadowVariable ?>;



<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>

<?php if($preview): ?>
  </article>
<?php endif?>