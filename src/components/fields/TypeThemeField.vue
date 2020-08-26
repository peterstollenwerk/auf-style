<template>

  <div>
    
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
        name="type_theme"
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
      typeThemeCustom: { 
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
      const typeThemes = site.content.type_themes;
      const options = [];
      typeThemes.push(this.typeThemeCustom);
      typeThemes.forEach(typeTheme => {
        options.push({
          value: typeTheme.autoid, 
          text: typeTheme.label
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