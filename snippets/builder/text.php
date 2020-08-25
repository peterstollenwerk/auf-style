<?php
  $text = $data->text()->kirbytextinline();
  $type = $data->type();
  $boxTheme = $data->box_theme();
  $fontSize = $data->font_size();
  
  $typeClass = ($type->isNotEmpty()) ? $type : '';
  
  $boxThemeClass = ($boxTheme->isNotEmpty()) ? 'box box-theme--'. $boxTheme : '';
  $fontSizeClass = ($boxTheme->isNotEmpty()) ? $fontSize : '';

  $cssClasses = [];
  array_push($cssClasses, $typeClass);
  array_push($cssClasses, $boxThemeClass);
  array_push($cssClasses, $fontSizeClass);

  $cssClass = implode(' ', array_filter($cssClasses));
?>
<p class="<?= $cssClass ?>">
  <?= $text ?>
</p>