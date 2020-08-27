<?php
  use auf\Style;

  $text = $data->text()->kirbytext();

  // TODO: NEXT

  $style1 = $data->style_settings()->toStyle();

  $style2 = new Style($data->style_settings());

  echo $style2->boxTheme();

  
  $boxTheme = $data->box_theme();
  $boxThemeClass = Style::getBoxThemeClassByBoxTheme($boxTheme);

  $type = $data->type();
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $typeTheme = $data->type_theme();
  $typeThemeClass = ($typeTheme->isNotEmpty()) ? 'type-theme--'. $typeTheme : '';
  
  $fontSize = $data->font_size();
  $fontSizeClass = ($fontSize->isNotEmpty()) ? $fontSize : '';
  
  $fontWeight = $data->font_weight();
  $fontWeightClass = ($fontWeight->isNotEmpty()) ? $fontWeight : '';
  
  $textAlign = $data->text_align();
  $textAlignClass = ($textAlign->isNotEmpty()) ? $textAlign : '';
  
  $fontStyle = $data->font_style();
  $fontStyleClass = ($fontStyle->isNotEmpty()) ? $fontStyle : '';

  $cssClasses = [];
  array_push($cssClasses, $typeClass);
  array_push($cssClasses, $boxThemeClass);
  array_push($cssClasses, $typeThemeClass);
  array_push($cssClasses, $fontSizeClass);
  array_push($cssClasses, $fontWeightClass);
  array_push($cssClasses, $fontWeightClass);
  array_push($cssClasses, $textAlignClass);

  $cssClass = implode(' ', array_filter($cssClasses));
?>

<div class="<?= $cssClass ?>">
  <?= $text ?>
</div>