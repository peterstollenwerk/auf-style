import BackgroundField from "./components/fields/BackgroundField.vue";
import StyleSettingsField from "./components/fields/StyleSettingsField.vue";

panel.plugin('auf/style', {
  fields: {
    auf_style_background: BackgroundField,
    auf_style_settings: StyleSettingsField
  }
});