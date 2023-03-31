<script setup>
import { useDark, useToggle } from '@vueuse/core'

const isDark = useDark()
const toggleDark = useToggle(isDark)
</script>

<template>
  <div>
    <slot :dark="isDark" :toggle-dark="toggleDark" />
  </div>
</template>
