<script setup>
import { ref } from 'vue'

defineProps({
  members: {
    type: Array,
    default: () => [],
  },
})

const isOpen = ref(false)
const selected = ref('Select a member')
const selected_id = ref(null)

function select(member) {
  selected.value = member.name
  selected_id.value = member.id
  isOpen.value = false
}

// Expose variables and functions
defineExpose({
  selected_id,
})
</script>

<template>
  <div class="relative">
    <span
      class="w-full bg-white border py-1.5 px-3.5 flex justify-between items-center transition-all duration-200"
      :class="isOpen ? 'rounded-t-lg' : 'rounded-lg'" @click="isOpen = !isOpen"
    >

      <h3 class="font-heading">
        {{ selected }}
      </h3>

      <svg
        :class="{ 'rotate-180': isOpen }" class="h-4 w-4 text-neutral-300 transform transition-all duration-200"
        viewBox="0 0 20 20"
      >
        <path fill="currentColor" d="M6.5 8.5L10 12l3.5-3.5L15 9l-5 5-5-5z" />
      </svg>
    </span>

    <div
      v-if="isOpen"
      class="absolute z-10 w-full rounded-b-lg bg-white border-l border-r border-b overflow-hidden h-44 overflow-y-auto transition-all duration-200"
    >
      <div
        v-for="(member, index) in members" :key="index" class="block px-5 py-3 hover:bg-gray-100"
        @click="select(member)"
      >
        <div class="flex items-center">
          <!-- <img
              :src="member.image"
              :alt="member.name"
              class="w-6 h-6 mr-2"
            > -->
          <div>
            <h3 class="font-heading text-sm font-medium">
              {{ member.name }}
            </h3>
            <!-- <span class="text-sm text-neutral-500">{{ member.pro }}</span> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <slot :assigned_to="selected_id" />
</template>

<style>
.rotate-180 {
  transform: rotate(180deg);
}
</style>
