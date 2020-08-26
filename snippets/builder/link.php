<?php
  use auf\Style;

  $text = $data->text()->kirbytextinline();
  $url = $data->url();
  $type = $data->type();
  $boxTheme = $data->box_theme();
  $boxThemeClass = Style::getBoxThemeClassByBoxTheme($boxTheme);

?>
<a href="<?= $url ?>" class="<?= $boxThemeClass ?>">
  <?= $text ?>
</a>