# auf-style

## Setup

```<body 
  class="page page-theme--dark" 
  data-active-theme="page-theme--dark">
```

## We need to create proper box-themes.

Instead of hacking button-styles together on the button element, why not use:

```<button class="box--primary-button">Primary</button>```

In oder to do this we can:

a. put all needed variables in the css-root and reference them in the class like:

```css
:root {
  --background-1: ...
  --background-theme-1-color: ...
  --background-theme-1-background-color: ...
}
.box--primary-button {
  --background: var(--background-1);
  --color: (--background-theme-1-color);
  --background-color: (--background-theme-1-background-color);
}
```

b. Or just generate the proper box with all variables without creating the root elements:

```
.box--primary-button {
  --background: url('...');
  --color: #FF0000;
  --background-color: black;
}
```

* [ ] Implement: Responsive Type: https://css-tricks.com/fun-viewport-units/
      1. <https://www.smashingmagazine.com/2016/05/fluid-typography/>
      2. <https://codepen.io/MadeByMike/pen/VvwqvW>
      3. <https://css-tricks.com/a-complete-guide-to-calc-in-css/>

We should use box--button-primary on buttons to design them.

## Included Dependencies

Color Convert Methods:
<https://github.com/hananils/kirby-colors>


## TODO

* [X] ~~*Testpage Preview - Box-Shadow-Themes*~~ [2020-08-11]

* [ ] Day/Night-Mode Toggle

* [ ] Boxes Preview

* [ ] Default HTML-Elements styles!?

* [ ] Element-Styles

* [ ] Set Site Defaults from Panel

* [ ] Create Preview Field For Gradients
      - Example Plugin: <https://github.com/sylvainjule/kirby-previews>
      - Kirby Info: <https://getkirby.com/docs/reference/panel/fields/structure#preview-of-fields-in-the-table>
