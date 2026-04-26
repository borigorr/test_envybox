<template>
  <button
    class="rounded border-gray-300 border-2 cursor-pointer"
    :disabled="props.disabled"
    @click="handleClick"
  >
    {{ props.label }}
  </button>
</template>
<script setup lang="ts">
  const emit = defineEmits(['click'])

  const props = withDefaults(
    defineProps<{
      label?: string
      disabled?: boolean
    }>(),
    {
      label: '',
      disabled: false,
    }
  )

  const handleClick = () => {
    emit('click')
  }
</script>
