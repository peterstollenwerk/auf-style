<?php

@include_once __DIR__ . '/vendor/autoload.php'; # all classes set in composer.json > psr-4 are loaded here!

use auf\Style;
use Kirby\Cms\Field;
use Kirby\Cms\Page;


Kirby::plugin('auf/style', [
    'fieldMethods' => [
        'toStyle' => function (Field $field) : Style {
            return new Style($field);
        },
    ],
    'options' => [ // use the options in php like this: option('auf.style.boxTheme.boxCssClassPrefix')
        'boxTheme' => [
            'boxCssClassPrefix' => 'box-theme--',
            'boxesCssClassPrefix' => 'boxes-theme--',
        ],
    ],
    'fields' => [
        'auf_style_box_theme' => [
            // here we could define the backend logic for our field if needed like:
            // 'props' => []
        ],
        'auf_style_type_theme' => [],
        'auf_style_font_size' => [],
        'auf_style_font_style' => [],
        'auf_style_font_weight' => [],
        'auf_style_text_align' => [],
        'auf_style_settings' => [],
    ],
    'blueprints' => [
        # SITE
        'auf_style/blueprints/fields/type_themes' => __DIR__ . '/blueprints/fields/type_themes.yml',
        'auf_style/blueprints/fields/color_themes' => __DIR__ . '/blueprints/fields/color_themes.yml',
        'auf_style/blueprints/fields/background_themes' => __DIR__ . '/blueprints/fields/background_themes.yml',
        'auf_style/blueprints/fields/border_themes' => __DIR__ . '/blueprints/fields/border_themes.yml',
        'auf_style/blueprints/fields/outline_themes' => __DIR__ . '/blueprints/fields/outline_themes.yml',
        'auf_style/blueprints/fields/box_shadow_themes' => __DIR__ . '/blueprints/fields/box_shadow_themes.yml',
        'auf_style/blueprints/fields/text_shadow_themes' => __DIR__ . '/blueprints/fields/text_shadow_themes.yml',
        'auf_style/blueprints/fields/box_themes' => __DIR__ . '/blueprints/fields/box_themes.yml',
        'auf_style/blueprints/fields/custom_css_blocks' => __DIR__ . '/blueprints/fields/custom_css_blocks.yml',
        'auf_style/site_style_settings' => __DIR__ . '/blueprints/site_style_settings.yml',
        # BUILDER Blocks
        'auf_style/blueprints/builder/page_title' => __DIR__ . '/blueprints/builder/page_title.yml',
        'auf_style/blueprints/builder/container' => __DIR__ . '/blueprints/builder/container.yml',
        'auf_style/blueprints/builder/editor' => __DIR__ . '/blueprints/builder/editor.yml',
        'auf_style/blueprints/builder/text' => __DIR__ . '/blueprints/builder/text.yml',
        'auf_style/blueprints/builder/link' => __DIR__ . '/blueprints/builder/link.yml',
        'auf_style/blueprints/builder/image' => __DIR__ . '/blueprints/builder/image.yml',
        # BUILDER Tab
        'auf_style/blueprints/builder/tabs/style' => __DIR__ . '/blueprints/builder/tabs/style.yml',
    ],    
    'snippets' => [
        'auf-style/site-header' => __DIR__ . '/snippets/site-header.php',
        'auf-style/site-footer' => __DIR__ . '/snippets/site-footer.php',
        'auf-style/theme-toggle-component' => __DIR__ . '/snippets/theme-toggle-component.php',
        'auf-style/theme-hue-saturation-slider' => __DIR__ . '/snippets/theme-hue-saturation-slider.php',
        'auf-style/color-themes' => __DIR__ . '/snippets/color-themes.php',
        'auf-style/color-theme' => __DIR__ . '/snippets/color-theme.php',
        'auf-style/background-themes' => __DIR__ . '/snippets/background-themes.php',
        'auf-style/background-theme' => __DIR__ . '/snippets/background-theme.php',
        'auf-style/border-themes' => __DIR__ . '/snippets/border-themes.php',
        'auf-style/border-theme' => __DIR__ . '/snippets/border-theme.php',
        'auf-style/outline-themes' => __DIR__ . '/snippets/outline-themes.php',
        'auf-style/outline-theme' => __DIR__ . '/snippets/outline-theme.php',
        'auf-style/text-shadow-themes' => __DIR__ . '/snippets/text-shadow-themes.php',
        'auf-style/text-shadow-theme' => __DIR__ . '/snippets/text-shadow-theme.php',
        'auf-style/box-shadow-themes' => __DIR__ . '/snippets/box-shadow-themes.php',
        'auf-style/box-shadow-theme' => __DIR__ . '/snippets/box-shadow-theme.php',
        'auf-style/box-themes' => __DIR__ . '/snippets/box-themes.php',
        'auf-style/box-themes' => __DIR__ . '/snippets/box-themes.php',
        'auf-style/box-theme' => __DIR__ . '/snippets/box-theme.php',
        'auf-style/type-themes' => __DIR__ . '/snippets/type-themes.php',
        'auf-style/type-theme' => __DIR__ . '/snippets/type-theme.php',
        'auf-style/button-themes' => __DIR__ . '/snippets/button-themes.php',
        'auf-style/custom-css-blocks' => __DIR__ . '/snippets/custom-css-blocks.php',
        // Theme-Toggle
        'auf-style/page-theme-toggle-button' => __DIR__ . '/snippets/page-theme-toggle-button.php',
        // CSSs
        'auf-style/style' => __DIR__ . '/snippets/style.php',
        // BUILDER SNIPPETS
        'auf-style/snippets/builder/page_title'  => __DIR__ . '/snippets/builder/page-title.php',
        'auf-style/snippets/builder/container'   => __DIR__ . '/snippets/builder/container.php',
        'auf-style/snippets/builder/editor'      => __DIR__ . '/snippets/builder/editor.php',
        'auf-style/snippets/builder/text'        => __DIR__ . '/snippets/builder/text.php',
        'auf-style/snippets/builder/link'        => __DIR__ . '/snippets/builder/link.php',
        'auf-style/snippets/builder/link-button' => __DIR__ . '/snippets/builder/link-button.php',
        'auf-style/snippets/builder/image' => __DIR__ . '/snippets/builder/image.php',
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
