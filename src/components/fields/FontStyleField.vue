<template>

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
      name="font_style"
      type="select"
      theme="field"
      @input="onChange"

    />
    
  </k-field>

</template>


<script>
export default {
  props: {
    value: String,
    label: String,
    help: String,
    // disabled: Boolean, // see computed!
    after: String,
    before: String,
    required: Boolean,
  },
  computed: {
      isLoading() {
        return this.$store.state.isLoading;
      },
      disabled() {
        return this.isLoading;
      } 
  },

  data: function() {
    return {
      options: [
        {value: 'font-style--italic',  text: 'italic'},
        {value: 'font-style--normal',  text: 'normal (reset italic)'},
      ],
    }
  },
  
  created() {
    this.load();
  },
  methods: {
    load() {
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