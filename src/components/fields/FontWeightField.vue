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
      name="font_weight"
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
        {value: 'font-weight--bold',  text: 'bold'},
        {value: 'font-weight--normal',  text: 'normal (reset bold)'},
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