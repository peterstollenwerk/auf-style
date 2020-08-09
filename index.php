<?php

# Instead of loading the classes via the load helper
# set them in the composer json
# to make the classes work with php unit!

@include_once __DIR__ . '/vendor/autoload.php'; # all classes set in composer.json > psr-4 are loaded here!

load([
    'auf\\plugin\\testclass' => 'lib/TestClass.php'
], __DIR__);

Kirby::plugin('auf/style', [
    'fields' => [
        'auf_style_background' => [
            // here we could define the backend logic for our field if needed
        ]
    ],
    'snippets' => [
        'auf-style/color-themes' => __DIR__ . '/snippets/color-themes.php',
        'auf-style/background-themes' => __DIR__ . '/snippets/background-themes.php',
    ],
    'blueprints' => [
        'auf_style/blueprints/fields/color_themes' => __DIR__ . '/blueprints/fields/color_themes.yml',
        'auf_style/blueprints/fields/background_themes' => __DIR__ . '/blueprints/fields/background_themes.yml',
        'auf_style/blueprints/fields/border_themes' => __DIR__ . '/blueprints/fields/border_themes.yml',
        'auf_style/blueprints/fields/outline_themes' => __DIR__ . '/blueprints/fields/outline_themes.yml',
        'auf_style/blueprints/fields/box_shadow_themes' => __DIR__ . '/blueprints/fields/box_shadow_themes.yml',
        'auf_style/blueprints/fields/box_themes' => __DIR__ . '/blueprints/fields/box_themes.yml',
    ],
]);
