<?php

# Instead of loading the classes via the load helper
# set them in the composer json
# to make the classes work with php unit!

use Kirby\Cms\Page;

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
        'auf-style/page-theme-toggle-button' => __DIR__ . '/snippets/page-theme-toggle-button.php',
        'auf-style/outline-themes' => __DIR__ . '/snippets/outline-themes.php',
        'auf-style/border-themes' => __DIR__ . '/snippets/border-themes.php',
        'auf-style/color-themes' => __DIR__ . '/snippets/color-themes.php',
        'auf-style/box-shadow-themes' => __DIR__ . '/snippets/box-shadow-themes.php',
        'auf-style/background-themes' => __DIR__ . '/snippets/background-themes.php',
        'auf-style/style' => __DIR__ . '/snippets/style.php',
    ],
    'blueprints' => [
        'auf_style/blueprints/fields/color_themes' => __DIR__ . '/blueprints/fields/color_themes.yml',
        'auf_style/blueprints/fields/background_themes' => __DIR__ . '/blueprints/fields/background_themes.yml',
        'auf_style/blueprints/fields/border_themes' => __DIR__ . '/blueprints/fields/border_themes.yml',
        'auf_style/blueprints/fields/outline_themes' => __DIR__ . '/blueprints/fields/outline_themes.yml',
        'auf_style/blueprints/fields/box_shadow_themes' => __DIR__ . '/blueprints/fields/box_shadow_themes.yml',
        'auf_style/blueprints/fields/box_themes' => __DIR__ . '/blueprints/fields/box_themes.yml',
    ],
    'templates' => [
        'style-tests' => __DIR__ . '/templates/style-tests.php',
    ],
    'routes' => [
        [
          'pattern' => 'style-tests',
          'action'  => function () {
                return Page::factory([
                    'slug' => 'style-tests',
                    'template' => 'style-tests',
                    'model' => 'style-tests',
                    'content' => [
                        'title' => 'Style Tests',
                    ]
                ]);
          }
        ]
    ]
]);
