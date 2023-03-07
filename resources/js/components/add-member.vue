<script>
export default {
  data() {
    return {
      isOpen: false,
    }
  },
  methods: {
    openModal() {
      this.isOpen = true
    },
    closeModal() {
      this.isOpen = false
    },
  },
  render() {
    return this.$slots.default({
      open: this.openModal,
      close: this.closeModal,
      isOpen: this.isOpen,
    })
  },
}
</script>

<template>
  <slot :open="openModal" :close="closeModal" />
</template>
