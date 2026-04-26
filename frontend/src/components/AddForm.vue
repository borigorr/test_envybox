<template>
  <div class="flex justify-center">
    <form action="#" class="flex flex-col gap-2 p-5 justify-center w-md" @submit="handleSubmit">
      <TextInput v-model="nameModel" placeholder="Имя" :required="true" />
      <TextInput v-model="messageModel" placeholder="Сообщение" :required="true" />
      <Button label="Отправить" :disabled="props.formDisabled"></Button>
    </form>
  </div>
</template>
<script setup lang="ts">
  import TextInput from '@/components/TextInput.vue'
  import Button from './Button.vue'

  const messageModel = defineModel<string>('message')
  const nameModel = defineModel<string>('name')
  const props = withDefaults(
    defineProps<{
      formDisabled?: boolean
    }>(),
    {
      formDisabled: false,
    }
  )

  const emit = defineEmits(['submit'])

  const handleSubmit = (event: SubmitEvent) => {
    event.preventDefault()
    emit('submit')
  }
</script>
