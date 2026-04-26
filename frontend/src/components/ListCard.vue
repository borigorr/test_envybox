<template>
  <div class="rounded-md border-2 border-gray-800">
    <div class="grid grid-cols-2">
      <div>Имя:</div>
      <div>{{ props.name }}</div>
      <div>Сообщение:</div>
      <div>{{ props.message }}</div>
    </div>
  </div>
</template>

<script lang="ts" setup>
  const props = defineProps<{
    name: string
    message: string
  }>()
</script>
