<script setup>
import { ref } from 'vue'
import { onClickOutside } from '@vueuse/core'

const dropdown = ref(false)

const dropdownHandler = () => {
  dropdown.value = false
}

const submitForm = (targetForm) => {
  // Access the form using the ref
  const form = ref(targetForm)

  console.log(targetForm)

  // Submit the form
  // form.value.submit()
}

onClickOutside(dropdown, dropdownHandler)

// Expose variables and functions
defineExpose({
  dropdown,
  submitForm,
})
</script>

<template>
  <div class="relative inline-block">
    <span class="text-white font-bold cursor-pointer" @click.stop="dropdown = !dropdown">
      <Icon size="32">
        <!-- <MoreHorizontal20Regular /> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2z"
            fill="currentColor"
          />
        </svg>
      </Icon>
    </span>

    <slot :dropdown="dropdown" :ask="submitForm" :dropdown-handler="dropdownHandler" />
  </div>
</template>
