# auf-style test

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## Setup

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

somewhere in your site.yml:

```style_settings: auf_style/site_style_settings```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

copy ```site/plugins/auf-style/assets/css```

to ```my-kirby-site/assets/css```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

add theme-class to your html:

```<html class="site site--dark" data-active-theme="site--dark">```

Open:
``css/auf-style-fluid-typography.css``

Adjust Sizes to your likeing:
```--size-7: 4.75;```

Set the root font-size, this is going to be the min-font-size for fluid typo:
```--root-font-size-unitless: 14;```

Set Fluid Typography min and max screen range

```--min-screensize: 100;```

```--max-screensize: 1200;```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

```$page->style_settings()->toStyle()->toCssClasses();```

```$page->style_settings()->toStyle()->inlineStyles();```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


## Included Dependencies

Color Convert Methods:
<https://github.com/hananils/kirby-colors>

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## DONE

* [X] ~~*Testpage Preview - Box-Shadow-Themes*~~ [2020-08-11]

* [X] ~~*Day/Night-Mode Toggle*~~ [2020-08-13]

* [X] ~~*Create Responsive Type Prototype:*~~ [2020-08-13] 
      1. <https://www.smashingmagazine.com/2016/05/fluid-typography/>
      2. <https://css-tricks.com/fun-viewport-units/>
      3. <https://codepen.io/MadeByMike/pen/VvwqvW>
      4. <https://css-tricks.com/a-complete-guide-to-calc-in-css/>

* [X] ~~*Boxes Preview*~~ [2020-08-14]

* [X] ~~*[target: 2h; performance: 8h] Explore if it´s necessary to add dedicated button-colors to the color theme?*~~ [2020-08-17]
  * [X] ~~*Use a form-dummy to evaluate the day & night-themes*~~ [2020-08-17]

* [X] ~~*[target: 4h-8h performance: 8h] Create Test Page with Default HTML-Elements!?*~~ [2020-08-17]

* [X] ~~*[target: 2h; performance: 2h] Create Auf-Elements/Link/Button*~~ [2020-08-17]

* [x] Created Builder Snippets to test Box Classes in the field

* [X] ~~*Implement Special Classes: .safe-text and .safe-text--extra*~~ [2020-08-19]

* [X] ~~*[target: 2h; performance: 11.5h] Fine Tune CSS Styles // Import Prototype V4 and work with test boxes Vererbung!*~~ [2020-08-19]

* [X] ~~*[target: 3h; performance: 3h] Implement UID from Structure UID Field*~~ [2020-08-19]
    * [X] ~~*Color-Themes*~~ [2020-08-19]
    * [X] ~~*Background-Themes*~~ [2020-08-19]
    * [X] ~~*Border-Themes*~~ [2020-08-19]
    * [X] ~~*Outline-Themes*~~ [2020-08-19]
    * [X] ~~*Box-Shadow-Themes*~~ [2020-08-19]
    * [ ] Text-Shadow-Themes

* [X] ~~*[target: 1h] Implement missing box-variables in page-theming-21.html:*~~ [2020-08-24] 
  * [X] ~~*outlines, etc...*~~ [2020-08-24]

* [X] ~~*[target: 1h; performance: 4h] Implement page-theming-21.html into backend*~~ [2020-08-25]

* [X] ~~*Set the classnames "box-theme-" and "boxes-theme-"-prefix in the config, because we will need them for our auf elements implementation*~~ [2020-08-25]

* [X] ~~*[target: 0.5; performance: 1h] Implement hardcoded fluid-typography.html --> css*~~ [2020-08-25]

* [X] ~~*[target: 2h; performance: 1.5h] Implement hardcoded Font-Sizes: <https://cdpn.io/stollenwerk/debug/MWyaNzZ/RBrOJXnGzEWM>*~~ [2020-08-25]

* [X] ~~*Font-weight*~~ [2020-08-25]

* [X] ~~*1h Font-style*~~ [2020-08-25]

* [X] ~~*[target: 0.5h] Implement Text-Shadow-Theme: Use custom-field for now*~~ [2020-08-25]

* [X] ~~*[target: 2h] Implement Sizes: <https://cdpn.io/stollenwerk/debug/MWyaNzZ/RBrOJXnGzEWM>*~~ [2020-08-25]

* [X] ~~*[performance: 1h] Type-Themes: Implement Font-Size-Themes to overwrite default styles and set custom css_selectors*~~ [2020-08-25]

* [X] ~~*Check if it´s possible to resize the font-size via >html style="--root-font-size: 12;"> Yes!*~~ [2020-08-26]

* [X] ~~*Create Custom Style Settings Field*~~ [2020-08-26]
  * [X] ~~*Create BoxThemeField*~~ [2020-08-26]
  * [X] ~~*Implement Box-Theme-Field into StyleSettingsField and check performance*~~ [2020-08-26]

* [X] ~~*Inline Styles can and should be realized with Kirby Editor!*~~ [2020-08-26]
  * [X] ~~*Test Kirby Editor functionality!*~~ [2020-08-26]
    * [X] ~~*Seems like the editor needs »pretty: false« setting in the yml config: https://github.com/TimOetting/kirby-builder/issues/132*~~ [2020-08-26]

* [X] ~~*Maybe the Box-Themes shoudln´t be using variables!?*~~ [2020-08-27]

* [X] ~~*Create Class to get all CSS classes from Style Tab*~~ [2020-08-27]

* [X] ~~*Implement --inverted-color and --inverted-background-color*~~ [2020-08-30]

* [X] ~~*custom_inline_style="background-color: red;"*~~ [2020-08-30]

* [X] ~~*P1: InlineStyle: margin, oder --margin-left: 4rem;*~~ [2020-08-30]
  margin-top: rem..., custom... [auto, initial, unser]
    - allowed Features
      - rem
      - auto
      - custom
  margin-bottom +-rem

* [X] ~~*Do we need to apply custom-classes?*~~ [2020-08-31]

* [X] ~~*Do we need the possibility to add a .new-class to an element?*~~ [2020-08-31]

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

### P1

* [ ] We need »layout--themes« for Style and Grid-Settings!
  * [ ] This could and should be generated from demo »element«-live-builds in the backend.

.element--page-title {}
.element--page-title .title {}
.element--page-title .subtitle {}
.element--page-title .tagline {}



* [ ] P2: Implement Box Helpers 
  * [ ] .border-outset, .borders-outset
  * [ ] .padding-outset, .paddings-outset
  * [ ] .text-safe, .texts-safe
    * [ ] safe-text--textshadow
    * [ ] safe-text--background

* [ ] min-height: ...rem -> element-box / custom-box

* [ ] style_children

* [ ] Create Usable Default Font-sizes Theme!
  * [ ] Maybe calc the padding depending on the screen-size?
  * [ ] Maybe calc the margin depending on the screen-size?


* [ ] Implement Padding-Theme?

Deko Bilder müssen als Content geladen werden, damit Z-Index überlappungen wie gewünscht funktionieren.

* [ ] Create Snippets for Reusable DecoElements in the backend to ensure Z-Index Layering

* [ ] Implement Component-Style: Every custom component »Element« could be styled via builder-dummy

* [ ] Implement Sun-/Moon Icons for Template Switching

* [ ] Implement Font-Size Component?

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

### P2

* [ ] Make it impossible to remove style fields??: https://forum.getkirby.com/t/structure-field-disable-add-delete-row-only/14391/9

* [ ] [target: 1h;] Implement Link Field: https://getkirby.com/plugins/oblikstudio/link-field

* [ ] [target: 0.5h;] Separate Border-Radius-Theme! As a Designer I want to set a border-radius independently of the border style, to give even boxes without border a radius.

* [ ] [target: 10m;] add --box-shadow-color to the color_themes

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

### P3

* [ ] Create Testpage for Site / Page / Box / Table / Button-Styles

* [ ] [target: 5h] Select Starting Theme individually per Page

* [ ] [target: 2h; performace: ] Set night and day styles from backend

* [ ] [target: 5d] Implement nice style-generator for each theme: https://html-css-js.com/css/generator/text-shadow/

* [ ] [target: 1d] Create custom Styles-View
As an editor i want a fast backend to concentrate on the content and be productive. The style tab inside the site generates a 1000 lines, 1/3 of them are null or ""-values. Backend loads slower. Wouldn´t it be better to create a dedicated styles-view and generate the styles as a imprtable css file?

* [ ] Select Themes via: https://github.com/sylvainjule/kirby-imageradio

* [ ] Implement Text-Styles [bold, uppercase, underline, strike] -> check Blocks-Plugin

* [ ] [target: 6h] Create Preview Field For Gradients
      - Example Plugin: <https://github.com/sylvainjule/kirby-previews>
      - Kirby Info: <https://getkirby.com/docs/reference/panel/fields/structure#preview-of-fields-in-the-table>

* [ ] [target: 3d] Create Typescale from Backend: <https://type-scale.com/>

* [ ] [target: 2d] Vertical Rhythm

* [ ] [target: 1d] Google Fonts

* [ ] implement box helper classes:
  * [ ] .border-outset

.outline {
  outline-color: var(--outline-color);
  outline-width: var(--outline-width);
  outline-style: var(--outline-style);
  outline-offset: var(--outline-offset);
}
*, my-outlins-selector {
  --outline-width: 2px;
  --outline-style: dashed;
  --outline-offset: 2px;
}