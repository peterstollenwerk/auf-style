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
      name="text_align"
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
        {value: 'text-align--center',  text: 'center'},
        {value: 'text-align--left',    text: 'left'},
        {value: 'text-align--right',   text: 'right'},
        {value: 'text-align--justify', text: 'justify'}
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