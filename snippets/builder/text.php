<?php
  $text = $data->text()->kirbytextinline();
  
  $type = $data->type();
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $boxTheme = $data->box_theme();
  $boxThemeClass = ($boxTheme->isNotEmpty()) ? 'box box-theme--'. $boxTheme : '';
  
  $fontSize = $data->font_size();
  $fontSizeClass = ($fontSize->isNotEmpty()) ? $fontSize : '';
  
  $fontWeight = $data->font_weight();
  $fontWeightClass = ($fontWeight->isNotEmpty()) ? $fontWeight : '';
  
  $fontStyle = $data->font_style();
  $fontStyleClass = ($fontStyle->isNotEmpty()) ? $fontStyle : '';

  $cssClasses = [];
  array_push($cssClasses, $typeClass);
  array_push($cssClasses, $boxThemeClass);
  array_push($cssClasses, $fontSizeClass);
  array_push($cssClasses, $fontWeightClass);
  array_push($cssClasses, $fontStyleClass);

  $cssClass = implode(' ', array_filter($cssClasses));
?>
<p class="<?= $cssClass ?>">
  <?= $text ?>
</p>