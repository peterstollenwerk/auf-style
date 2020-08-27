<?php
  $text = $data->text()->kirbytext();
  $cssClasses = $data->style_settings()->toCssClasses();
?>

<div class="<?= $cssClasses ?>">

  <?= $text ?>

</div>