<?php
  $text = $data->text()->blocks();
  
  $type = $data->type();
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $boxTheme = $data->box_theme();
  $getBoxThemeClass = function() use ($boxTheme){
    if($boxTheme->isEmpty()) {
      return '';
    }
    elseif($boxTheme == 'box') {
      return 'box';
    }
    elseif($boxTheme == 'box--inverted') {
      return 'box box--inverted';
    }
    else {
      return 'box box-theme--'. $boxTheme;
    }
  };

  $boxThemeClass = $getBoxThemeClass();
  
  $typeTheme = $data->type_theme();
  $typeThemeClass = ($typeTheme->isNotEmpty()) ? 'type-theme--'. $typeTheme : '';
  
  $fontSize = $data->font_size();
  $fontSizeClass = ($fontSize->isNotEmpty()) ? $fontSize : '';
  
  $fontWeight = $data->font_weight();
  $fontWeightClass = ($fontWeight->isNotEmpty()) ? $fontWeight : '';
  
  $fontStyle = $data->font_style();
  $fontStyleClass = ($fontStyle->isNotEmpty()) ? $fontStyle : '';

  $cssClasses = [];
  array_push($cssClasses, $typeClass);
  array_push($cssClasses, $boxThemeClass);
  array_push($cssClasses, $typeThemeClass);
  array_push($cssClasses, $fontSizeClass);
  array_push($cssClasses, $fontWeightClass);
  array_push($cssClasses, $fontStyleClass);

  $cssClass = implode(' ', array_filter($cssClasses));
?>

<div class="<?= $cssClass ?>">
  <?= $text ?>
</div>