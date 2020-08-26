import BackgroundField from "./components/fields/BackgroundField.vue";

import BoxThemeField from "./components/fields/BoxThemeField.vue";
import FontSizeField from "./components/fields/FontSizeField.vue";
import FontStyleField from "./components/fields/FontStyleField.vue";
import FontWeightField from "./components/fields/FontWeightField.vue";

import StyleSettingsField from "./components/fields/StyleSettingsField.vue";

panel.plugin('auf/style', {
  fields: {
    auf_style_background: BackgroundField,
    auf_style_box_theme: BoxThemeField,
    auf_style_font_size: FontSizeField,
    auf_style_font_style: FontStyleField,
    auf_style_font_weight: FontWeightField,

    auf_style_settings: StyleSettingsField
  }
});