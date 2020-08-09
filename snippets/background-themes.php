<?php
  $wrapTag = $wrapTag ? $wrapTag : false;
  $backgroundThemes = $site->background_themes();
?>

<?php if($backgroundThemes->isNotEmpty()): ?>

  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  <h2>Background Themes</h2>

  <?php foreach($backgroundThemes->toStructure() as $backgroundTheme): ?>

  <?php 
      $uid = $backgroundTheme->uid();
      $css_class = '--background-theme--'. $uid;
      $label = $backgroundTheme->label();
      $backgrounds = $backgroundTheme->background()->toStructure()->flip();
      ?>
<?php /* START CLASS --------------------- */ ?>
    <?= $css_class ?> { <?php if($label->isNotEmpty()): ?>/* <?= $label ?>; */<?php endif?>

      <?php 

      

      ?>

      <?php foreach($backgrounds as $index => $background): ?>
        <?php 
        
          $type = $background->type();
          $variables = [];
          // IMAGE START
          if($type == 'image') {
            $key = '--background-image--'.$index.'';
            $value = $background->image()->toFile()->url();
            $variables[$key] = $value;
          }
          // IMAGE END
          // GRADIENTS START
          if($type == 'gradient') {
            $key = '--background-image--'.$index.'';
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
              // NEXT Direction Deg
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
            $variables[$key] = implode(', ', $gradientValues);
          }
          // GRADIENTS END
          
          // render variables;
          foreach($variables as $index => $variable) {
            echo $index . ': ' . $variable . ';';
          }
          
        ?>

      <?php endforeach?>

      

    }

    <?php /* END CLASS --------------------- */ ?>

  <?php endforeach?>
  
  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>

<?php endif?>