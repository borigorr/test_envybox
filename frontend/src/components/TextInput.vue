<template>
  <input
    v-model="model"
    type="text"
    :placeholder="props.placeholder"
    :required="props.required"
    class="peer mt-2 w-full rounded border-black shadow-sm md:text-sm p-2"
  />
</template>
<script setup lang="ts">
  const props = withDefaults(
    defineProps<{
      placeholder?: string
      required?: boolean
    }>(),
    {
      placeholder: '',
      required: false,
    }
  )

  const model = defineModel<string>({
    default: '',
  })
</script>
