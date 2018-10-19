<template>
  <button class="su-button" :class="['su-'+type, {'su-small': small, 'su-disabled': disabled, 'su-fullwidth': fullwidth, 'su-fullwidth-mobile': fullwidthMobile, } ]">
    <slot></slot>
  </button>
</template>

<script>
export default {
  props: {
    type: {
      // bouton primaire
      type: String,
      required: false,
      default: "primary",
    },
    small: {
      type: Boolean,
      required: false,
      default: false,
    },
    disabled: {
      type: Boolean,
      required: false,
      default: false,
    },
    fullwidth: {
      type: Boolean,
      required: false,
      default: false,
    },
    fullwidthMobile: {
      type: Boolean,
      required: false,
      default: false,
    },
  }
};
</script>

<style lang="sass" scoped>
@import '../../../doc/assets/scss/_variables.scss';
@import './_variables.scss';
@import './main.scss';
</style>