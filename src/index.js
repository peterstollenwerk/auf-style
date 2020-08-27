import BoxThemeField from "./components/fields/BoxThemeField.vue";
import TypeThemeField from "./components/fields/TypeThemeField.vue";
import FontSizeField from "./components/fields/FontSizeField.vue";
import FontStyleField from "./components/fields/FontStyleField.vue";
import FontWeightField from "./components/fields/FontWeightField.vue";
import TextAlignField from "./components/fields/TextAlignField.vue";
import StyleSettingsField from "./components/fields/StyleSettingsField.vue";

panel.plugin('auf/style', {
  fields: {
    auf_style_box_theme: BoxThemeField,
    auf_style_type_theme: TypeThemeField,
    auf_style_font_size: FontSizeField,
    auf_style_font_style: FontStyleField,
    auf_style_font_weight: FontWeightField,
    auf_style_text_align: TextAlignField,
    auf_style_settings: StyleSettingsField
  }
});