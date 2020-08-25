<template>

  <div>


    <p class="loading">Loading...</p>

    <k-fieldset v-model="style_settings" @input="input" :fields="{
      box_theme_2: {
        label: 'Box Theme 2',
        type: 'select',
        options: boxThemes,
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
      boxThemes: [
        {value: 'custom...', text: 'Custom...'},
      ]
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
      this.getBoxThemes();
    },
    input() {
      this.$emit("input", JSON.stringify(this.style_settings, function(key, value){
        // only store actual values
        if (value.length < 1) { return undefined; }
        return value;
      }));
    },
    getBoxThemes() {
      this.$api.site.get()
        .then(res => {
          const boxThemes = res.content.box_themes;
          boxThemes.forEach(theme => {
            this.boxThemes.unshift({value: theme.autoid, text: theme.label});
          });
          // this.boxThemes = options;
        });
    },
  }
}
</script>

<style>
  .loading {
    display: none;
  }
  *[data-loading="true"] .loading {
    display: block;
  }
</style>