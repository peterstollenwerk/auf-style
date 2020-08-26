<template>

  <div>
    
    <span v-show="isLoading" class="k-topbar-loader">
      <svg viewBox="0 0 16 18">
        <path fill="white" d="M8,0 L16,4.50265232 L16,13.5112142 L8,18.0138665 L0,13.5112142 L0,4.50265232 L8,0 Z M2.10648757,5.69852516 L2.10648757,12.3153414 L8,15.632396 L13.8935124,12.3153414 L13.8935124,5.69852516 L8,2.38147048 L2.10648757,5.69852516 Z" />
      </svg>
    </span>

    <k-field 
      class="k-grid-field"
      :disabled="disabled"
      :help="help"
      :label="label"
      :required="required"
    >
      <k-input
        v-model="value"
        :options="options"
        name="box_theme"
        type="select"
        theme="field"
        @input="onChange"

      />
    </k-field>

  </div>

</template>


<script>
export default {
  props: {
    value: String,
    label: String,
    help: String,
    // disabled: Boolean,
    after: String,
    before: String,
    required: Boolean,
    
  },
  data: function() {
    return {
      selected: this.value,
      boxThemeCustom: { 
        autoid: "custom", 
        label: "Custom..."},
      options: [],
    }
  },
  computed: {
    isLoading() {
      return this.$store.state.isLoading;
    },
    disabled() {
      return this.isLoading;
    } 
  },
  created() {
    this.load();
  },
  methods: {
    async setOptions() {
      const site = await this.$api.site.get();
      const boxThemes = site.content.box_themes;
      const options = [];
      // boxThemes.push(this.boxThemeCustom);
      boxThemes.forEach(boxTheme => {
        options.push({
          value: boxTheme.autoid, 
          text: boxTheme.label
        });
      });
      this.options = options;
    },
    load() {
      this.setOptions();
    },
    onChange(value) {
      this.$emit("input", value);
    }
  }
}
</script>

<style>
  /* optional scoped styles for the component */
</style>