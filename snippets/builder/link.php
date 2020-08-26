<?php
  use auf\Style;

  $text = $data->text()->kirbytextinline();
  $url = $data->url();

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
<a href="<?= $url ?>" class="<?= $cssClass ?>">
  <?= $text ?>
</a>