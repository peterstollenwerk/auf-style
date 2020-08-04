<?php

# Instead of loading the classes via the load helper
# set them in the composer json
# to make the classes work with php unit!

@include_once __DIR__.'/vendor/autoload.php'; # all classes set in composer.json > psr-4 are loaded here!

load([
  'auf\\plugin\\testclass' => 'lib/TestClass.php'
], __DIR__);

Kirby::plugin('auf/plugin', [
    'fields' => [
        'aufpluginfield' => [
          // here we could define the backend logic for our field if needed
        ]
    ]
]);