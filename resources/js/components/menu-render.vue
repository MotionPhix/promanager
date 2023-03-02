<script>
export default {
  props: {
    members: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      isOpen: false,
      selected: 'Select a member',
    }
  },
  methods: {
    select(member) {
      this.selected = member.name
      this.isOpen = false
    },
    toggle() {
      this.isOpen = !this.isOpen
    },
  },
  render() {
    return this.$slots.default({
      isOpen: this.isOpen,
      toggle: this.toggle,
      selected: this.selected,
      select: this.select,
      members: this.members,
    })
  },
}
</script>
