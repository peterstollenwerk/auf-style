<?php 
if($type == 'gradient') {
  $key = '--background-gradient--'.$index.'';
  $gradients = $background->gradient()->toStructure();
  $gradientCssTypeMap = [
    'linear_gradient' => 'linear-gradient',
    'repeating_linear_gradient' => 'repeating-linear-gradient'
  ];
  $gradientValues = [];
  
  // GRADIENT start
  
  foreach($gradients as $gradient) {
    $gradientValue = '';
    $gradientType = $gradientCssTypeMap[$gradient->gradient_type()->value()];
    $gradientFunctionValues = [];

    // DIRECTION start
    $directionType = $gradient->linear_gradient_direction();
    $directionValue = false;
    if($directionType == 'to') {
      $x = $gradient->linear_gradient_direction_to_x();
      $y = $gradient->linear_gradient_direction_to_y();
      if($x->isNotEmpty() || $y->isNotEmpty()) {
        $directionValue = implode(' ', [$directionType, $x, $y]);
      }
    }
    if($directionType == 'deg'){
      $degrees = $gradient->linear_gradient_direction_deg();
      $directionValue = $degrees.$directionType;
    }
    if($directionType == 'turn'){
      $turns = $gradient->linear_gradient_direction_turn();
      $directionValue = $turns.$directionType;
    }
    if($directionValue) {
      array_push($gradientFunctionValues, $directionValue);
    }
    // DIRECTION end
    // COLOR STOPS start
    $gradientColorStopValues = [];
    foreach($gradient->gradient_color_stops()->toStructure() as $colorStop) {
      $color = $colorStop->color()->value();
      $start = $colorStop->start()->value();
      $end = $colorStop->end()->value();
      $value = array_filter([$color, $start, $end]);
      if(count($value)) {
        array_push($gradientColorStopValues, implode(' ', $value));
      }
    }
    $gradientColorStops = implode(', ', $gradientColorStopValues);
    array_push($gradientFunctionValues, $gradientColorStops);
    // COLOR STOPS end


    $gradientValue = $gradientType . '('. implode(', ', $gradientFunctionValues) .')';
    array_push($gradientValues, $gradientValue);
  }
  // GRADIENT end
  $backgroundImageVariables[$key] = implode(', ', $gradientValues);
}
// GRADIENTS END
/* BACKGROUND end */