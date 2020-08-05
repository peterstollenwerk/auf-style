<h1><?= $page->title() ?></h1>

<?php

  $c1 = $site->colors()->toStructure()->first()->color()->toColor('hex');
  $c2 = $site->colors()->toStructure()->first()->background_color()->toColor('hsl');


  var_dump($c1);
  var_dump($c2);

?>

