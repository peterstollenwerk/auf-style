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
    
    'options' => [ // use the options in php like this: option('auf.style.boxTheme.boxCssClassPrefix')
        'boxTheme' => [
            'boxCssClassPrefix' => 'box-theme--',
            'boxesCssClassPrefix' => 'boxes-theme--',
        ],
    ],
    'fields' => [
        'auf_style_background' => [
            // here we could define the backend logic for our field if needed
        ]
    ],
    'snippets' => [
        'auf-style/site-header' => __DIR__ . '/snippets/site-header.php',
        'auf-style/site-footer' => __DIR__ . '/snippets/site-footer.php',
        'auf-style/theme-toggle-component' => __DIR__ . '/snippets/theme-toggle-component.php',
        
        'auf-style/color-themes' => __DIR__ . '/snippets/color-themes.php',
        'auf-style/color-theme' => __DIR__ . '/snippets/color-theme.php',
        'auf-style/background-themes' => __DIR__ . '/snippets/background-themes.php',
        'auf-style/background-theme' => __DIR__ . '/snippets/background-theme.php',
        'auf-style/border-themes' => __DIR__ . '/snippets/border-themes.php',
        'auf-style/border-theme' => __DIR__ . '/snippets/border-theme.php',
        'auf-style/outline-themes' => __DIR__ . '/snippets/outline-themes.php',
        'auf-style/outline-theme' => __DIR__ . '/snippets/outline-theme.php',
        'auf-style/box-shadow-themes' => __DIR__ . '/snippets/box-shadow-themes.php',
        'auf-style/box-shadow-theme' => __DIR__ . '/snippets/box-shadow-theme.php',
        'auf-style/box-themes' => __DIR__ . '/snippets/box-themes.php',
        'auf-style/box-themes' => __DIR__ . '/snippets/box-themes.php',
        'auf-style/box-theme' => __DIR__ . '/snippets/box-theme.php',
        'auf-style/button-themes' => __DIR__ . '/snippets/button-themes.php',
        
        'auf-style/page-theme-toggle-button' => __DIR__ . '/snippets/page-theme-toggle-button.php',
        'auf-style/style' => __DIR__ . '/snippets/style.php',
        // BUILDER SNIPPETS
        'auf-style/snippets/builder/container'        => __DIR__ . '/snippets/builder/container.php',
        'auf-style/snippets/builder/text'        => __DIR__ . '/snippets/builder/text.php',
        'auf-style/snippets/builder/link'        => __DIR__ . '/snippets/builder/link.php',
        'auf-style/snippets/builder/link-button' => __DIR__ . '/snippets/builder/link-button.php',
    ],
    'blueprints' => [
        # SITE
        'auf_style/blueprints/fields/color_themes' => __DIR__ . '/blueprints/fields/color_themes.yml',
        'auf_style/blueprints/fields/background_themes' => __DIR__ . '/blueprints/fields/background_themes.yml',
        'auf_style/blueprints/fields/border_themes' => __DIR__ . '/blueprints/fields/border_themes.yml',
        'auf_style/blueprints/fields/outline_themes' => __DIR__ . '/blueprints/fields/outline_themes.yml',
        'auf_style/blueprints/fields/box_shadow_themes' => __DIR__ . '/blueprints/fields/box_shadow_themes.yml',
        'auf_style/blueprints/fields/box_themes' => __DIR__ . '/blueprints/fields/box_themes.yml',
        # BUILDER
        'auf_style/blueprints/builder/container' => __DIR__ . '/blueprints/builder/container.yml',
        'auf_style/blueprints/builder/text' => __DIR__ . '/blueprints/builder/text.yml',
        'auf_style/blueprints/builder/link' => __DIR__ . '/blueprints/builder/link.yml',
        # BUILDER TABS FIELDS
        'auf_style/blueprints/builder/tabs/style' => __DIR__ . '/blueprints/builder/tabs/style.yml',
        'auf_style/blueprints/builder/tabs/style/box_theme' => __DIR__ . '/blueprints/builder/tabs/style/box_theme.yml',
        'auf_style/blueprints/builder/tabs/style/font_size' => __DIR__ . '/blueprints/builder/tabs/style/font_size.yml',
        'auf_style/blueprints/builder/tabs/style/font_weight' => __DIR__ . '/blueprints/builder/tabs/style/font_weight.yml',
        'auf_style/blueprints/builder/tabs/style/font_style' => __DIR__ . '/blueprints/builder/tabs/style/font_style.yml',
    ],
    'templates' => [
        'style-tests' => __DIR__ . '/templates/style-tests.php',
        'style-boxes-preview' => __DIR__ . '/templates/style-boxes-preview.php',
        'style-page-theme' => __DIR__ . '/templates/style-page-theme.php',
        'style-fluid-typography' => __DIR__ . '/templates/style-fluid-typography.php',
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
                        'title' => 'Style: Tests',
                    ]
                ]);
          }
        ],
        [
          'pattern' => 'style-boxes-preview',
          'action'  => function () {
                return Page::factory([
                    'slug' => 'style-boxes-preview',
                    'template' => 'style-boxes-preview',
                    'model' => 'style-boxes-preview',
                    'content' => [
                        'title' => 'Style: Boxes Preview',
                    ]
                ]);
          }
        ],
        [
          'pattern' => 'style-page-theme',
          'action'  => function () {
                return Page::factory([
                    'slug' => 'style-page-theme',
                    'template' => 'style-page-theme',
                    'model' => 'style-page-theme',
                    'content' => [
                        'title' => 'Style: Page Theme',
                    ]
                ]);
          }
        ],
        [
          'pattern' => 'style-fluid-typography',
          'action'  => function () {
                return Page::factory([
                    'slug' => 'style-fluid-typography',
                    'template' => 'style-fluid-typography',
                    'model' => 'style-fluid-typography',
                    'content' => [
                        'title' => 'Style: Fluid Typograpy',
                    ]
                ]);
          }
        ],
    ]
]);
