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
      name="font_size"
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
        {value: 'font-size--7',  text: '  7 (h1)'},
        {value: 'font-size--6',  text: '  6 (h2)'},
        {value: 'font-size--5',  text: '  5 (h3)'},
        {value: 'font-size--4',  text: '  4 (h4)'},
        {value: 'font-size--3',  text: '  3 (h5)'},
        {value: 'font-size--2',  text: '  2 (h6)'},
        {value: 'font-size--1',  text: '  1 (text)'},
        {value: 'font-size--0',  text: '  0 (small)'},
        {value: 'font-size---1', text: '-1 (x-small) ☝︎ use positive values above to ensure readability!'},
        {value: 'font-size---2', text: '-2 (xx-small) ☝︎ ☝︎ '},
        {value: 'font-size---3', text: '-3 (xxx-small) ☝︎ ☝︎ ☝︎ '},
        {value: 'font-size---4', text: '-4 (too-small!) ☝︎ ☝︎ ☝︎ ☝︎ '},
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