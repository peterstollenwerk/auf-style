<?php 
$getBackgroundGradientValue = function() use ($background) {
  $gradients = $background->gradient()->toStructure();
  $gradientCssTypeMap = [
    'linear_gradient' => 'linear-gradient',
    'repeating_linear_gradient' => 'repeating-linear-gradient'
  ];
  $gradientValues = [];
  
  // GRADIENT start
  foreach($gradients as $gradient) {
    $gradientType = $gradientCssTypeMap[$gradient->gradient_type()->value()];

    // DIRECTION start
    $getDirectionValue = function () use ($gradient) {
      $directionType = $gradient->linear_gradient_direction();
      if($directionType == 'to') {
        $x = $gradient->linear_gradient_direction_to_x();
        $y = $gradient->linear_gradient_direction_to_y();
        if($x->isNotEmpty() || $y->isNotEmpty()) {
          return implode(' ', [$directionType, $x, $y]);
        }
      }
      if($directionType == 'deg'){
        $degrees = $gradient->linear_gradient_direction_deg();
        return $degrees.$directionType;
      }
      if($directionType == 'turn'){
        $turns = $gradient->linear_gradient_direction_turn();
        return $turns.$directionType;
      }
    };
    // DIRECTION end

    // COLOR STOPS start
    $getColorStops = function() use ($gradient) {
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
      return $gradientColorStops = implode(', ', $gradientColorStopValues);
    };
    // COLOR STOPS end
    $gradientFunctionValues = [];

    if($colorStops = $getColorStops()) {
      array_push($gradientFunctionValues, $colorStops);
    }
    if($value = $getDirectionValue()) {
      array_push($gradientFunctionValues, $value);
    }

    if(array_filter($gradientFunctionValues)) {
      $gradientValue = $gradientType . '('. implode(', ', $gradientFunctionValues) .')';
    }

    array_push($gradientValues, $gradientValue);
  
  }
  return implode(' ', $gradientValues);
};

?>