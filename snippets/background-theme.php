<?php
if(!isset($backgroundTheme)) return;

$wrapTag = isset($wrapTag) ? $wrapTag : false;
$preview = isset($preview) ? $preview : false;
$renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
?>

<?php 
  $autoidClass ='background-theme--' . $backgroundTheme->autoid();
  $cssClasses = ['autoidClass' => $autoidClass];
  $cssSelector = $backgroundTheme->css_selector();
  if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
  $cssClass = implode(', ', $cssClasses);

  $label = $backgroundTheme->label();
  $backgrounds = [];
?>

<?php if($preview): ?>
  <h3><?= $label ?></h3>
  <h4>.<?= $cssClass ?></h4>
  <div class="box <?= $autoidClass ?>" style="height: 33vh"></div>
<?php endif?>

<?php /* START CLASS --------------------- */ ?>

<?php if($wrapTag): ?>
  <<?= $wrapTag ?> class="box box-shadow--inset border-radius" style="background-color: transparent"> 
<?php endif?>

<?php if($renderCssClass): ?>
  .<?= $cssClass ?> { <?php if($label->isNotEmpty()): ?>/* <?= $label ?>; */<?php endif?>
<?php endif?>

<?php foreach($backgroundTheme->background()->toStructure() as $index => $background): ?>
  
  <?php 

    include('css-background.php');
    $vars = $getBackgroundVars();

    $varOrder = [
      'image',
      'position',
      'size',
      'repeat',
      'attachment',
      'origin',
      'clip'
    ];

    if(count($vars)) {
      $hasPosition = array_key_exists('position', $vars);
      $hasSize = array_key_exists('size', $vars);
      $showSlash = ($hasPosition && $hasSize) ? true : false;

      $bgKey = '--background-' . $index;
      $bgValue = [];
      foreach($varOrder as $key) {
        if(array_key_exists($key, $vars)) {
          array_push($bgValue, $vars[$key]);
          if($key == 'position' && $showSlash) {
            array_push($bgValue, '/');
          }
        }
      }
      
      echo $bgKey . ': ' . implode(' ', $bgValue) . ';';
      
      array_push($backgrounds, $bgKey);

    };

    /*
    --background-1-image: url(https://www.dw.com/image/19306161_303.jpg);
    --background-1-position: left top;
    --background-1-size: 33%;
    --background-1-repeat: repeat;
    --background-1-attachment: fixed; 
    --background-1-origin: content-box;  
    --background-1-clip: border-box;
    --background-1: 
        var(--background-1-image) 
        var(--background-1-position) 
      /
        var(--background-1-size)
        var(--background-1-repeat)
        var(--background-1-attachment)
        var(--background-1-origin)
        var(--background-1-clip)
      ;
      */
  ?>

<?php endforeach?>

<?php
  
$value = function() use ($backgrounds) {
  $vs = [];
  foreach($backgrounds as $background) {
    $v = 'var('. $background . ')';
    array_push($vs, $v);
  }
  return implode(', ' , $vs);
};
$key = '--background';
echo $backgroundVariable = $key .': '. $value() . ';';
  
?>

<?php if($renderCssClass): ?>
}
<?php endif?>

<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>