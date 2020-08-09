<?php 

$key = function($postFix = '-image') use ($index) {
  return '--background-' . $index . $postFix;
};

$backgroundImageValue = function() use ($background) {
  $url = $background->image()->toFile()->url();
  if ($url) {
    return $value = 'url(' . $url . ')';
  }
};

if($background->type() == 'image') {
  echo $key('-image') . ': '. $backgroundImageValue() .';' ;
}



$positionXValue = function() use ($background) {
  $position_x =  $background->position_x();
  if($position_x->isEmpty()) { return false; }
  if($position_x == 'custom') {
    $xCustom = $background->position_x_custom();
    if($xCustom->isEmpty()) { return false; }
    return $xCustom;
  }
  return $position_x;
};

$positionYValue = function() use ($background) {
  $position_y =  $background->position_y();
  if($position_y->isEmpty()) { return false; }
  if($position_y == 'custom') {
    $yCustom = $background->position_y_custom();
    if($yCustom->isEmpty()) { return false; }
    return $yCustom;
  }
  return $position_y;
};

$positionValues = function() use ($positionXValue, $positionYValue) {
  $positions = [$positionXValue(), $positionYValue()];
  $positions = array_filter($positions);
  return implode(' ', $positions);
};

if($pos = $positionValues()) {
  echo ' ';
  echo $key('-position') . ': ' . $positionValues() .';';
}





// include('css-background-image.php');
// include('css-background-gradient.php');