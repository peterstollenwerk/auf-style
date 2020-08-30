<template>

  <div>

    <k-fieldset v-model="style_settings" @input="input" :fields="{
      
      box_theme: {
        label: 'Box Theme',
        type: 'auf_style_box_theme',
        width: '6/6',
      },
      
      type_theme: {
        label: 'Type Theme',
        type: 'auf_style_type_theme',
        width: '2/6'
      },
      font_size: {
        label: 'Font Size',
        type: 'auf_style_font_size',
        width: '1/6',
      },
      font_weight: {
        label: 'Font Weight',
        type: 'auf_style_font_weight',
        width: '1/6',
      },
      font_style: {
        label: 'Font Style',
        type: 'auf_style_font_style',
        width: '1/6',
      },
      text_align: {
        label: 'Text Align',
        type:  'auf_style_text_align',
        width: '1/6',
      },
      margin_top: {
        label: 'Margin Top',
        type:  'number',
        width: '1/2',
        after: 'rem'
      },
      margin_bottom: {
        label: 'Margin Bottom',
        type:  'number',
        width: '1/2',
        after: 'rem'
      },
      custom_inline_style: {
        label: 'Custom Inline Style',
        type:  'text',
        width: '1/1',
      },
      
    }" />
    
  </div>

</template>

<script>
export default {
  props: {
    help: String,
    label: String,
    after: String,
    before: String,
    disabled: Boolean,
    required: Boolean,
    value: String,
  },
  data() {
    return {
      style_settings: {},
    }
  },
  created() {
    this.load();
  },
  methods: {
    load() {
      if(this.value) {
        this.style_settings = JSON.parse(this.value);
      }
    },
    input() {
      this.$emit("input", JSON.stringify(this.style_settings, function(key, value){
        // only store actual values
        if (value.length < 1) { return undefined; }
        return value;
      }));
    },
  }
}
</script>

<style>
  
</style>