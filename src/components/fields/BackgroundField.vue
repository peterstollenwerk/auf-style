<template>

  <div>
    
    <k-fieldset v-model="background" @input="input" :fields="{

      background_uid: {
        label: 'Background UID',
        type: 'text',
        width: '1/3'
      },

      background_label: {
        label: 'Background Label',
        type: 'text',
        width: '1/3'
      },

      background_type: {
        label: 'Background Type',
        type: 'select',
        width: '1/3',
        options: [
          {'text': 'Image', 'value': 'image'},
          {'text': 'Gradient', 'value': 'gradient'},
          {'text': 'Custom...', 'value': 'custom'},
        ]
      },

      background_image: {
        label: 'Background Image',
        type: 'files'
      }


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
      background: {}
    }
  },
  created() {
    this.load();
  },
  methods: {
    load() {},
    input() {
      this.$emit("input", JSON.stringify(this.background, function(key, value){
        // only store actual values
        if (value.length < 1) { return undefined; }
        return value;
      }));
    },
  }
}
</script>

<style>
  /* optional scoped styles for the component */
</style>