<?php 

$getBackgroundVars = function() use ($background, $index) {

  $backgroundVars = [];

  // --background-image
  $backgroundImageValue = function() use ($background) {
    $url = $background->image()->toFile()->url();
    if ($url) {
      return 'url(' . $url . ')';
    }
  };

  if($background->type() == 'image') {
    $backgroundVars['image'] = $backgroundImageValue();
  }

  if($background->type() == 'gradient') {
    include('css-background-gradient.php');
    $backgroundVars['image'] = $getBackgroundGradientValue();
  }




  // --background-position
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
    if(count($positions)) {
      return implode(' ', $positions);
    } else {
      return $defaultPosition = 'top left';
    }
  };

  if($pos = $positionValues()) {
    $backgroundVars['position'] = $pos;
  }

  // --background-size
  $sizeValue = function() use ($background) {
    $size = $background->size();
    if($size == 'custom') {
      $size = [$background->size_x()->value(), $background->size_y()->value()];
      return implode(' ', array_filter($size));
    }
    if($size) return $size->value();
  };
  if($size = $sizeValue()) {
    $backgroundVars['size'] = $size;
  }


  // --background-repeat
  $repeat = $background->repeat();
  if($repeat->isNotEmpty()) {
    $backgroundVars['repeat'] = $repeat->value();
  }
  
  // --attachment
  $attachment = $background->attachment();
  if($attachment->isNotEmpty()) {
    $backgroundVars['attachment'] = $attachment->value();
  }
  
  // --origin
  $origin = $background->origin();
  if($origin->isNotEmpty()) {
    $backgroundVars['origin'] = $origin->value();
  }

  // --clip
  $clip = $background->clip();
  if($clip->isNotEmpty()) {
    $backgroundVars['clip'] = $clip->value();
  } 

  // Output

  return array_filter($backgroundVars);

};

// include('css-background-gradient.php');

?>