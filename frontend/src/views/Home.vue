<template>
  <AddForm
    v-model:message="message"
    v-model:name="name"
    :form-disabled="formDisabled"
    @submit="handleSubmit"
  />
</template>

<script setup lang="ts">
  import { ref } from 'vue'
  import { useStore } from 'vuex'
  import { useRouter } from 'vue-router'
  import AddForm from '@/components/AddForm.vue'

  const store = useStore()

  const message = ref<string>('')
  const name = ref<string>('')
  const formDisabled = ref<boolean>(false)
  const router = useRouter()

  const handleSubmit = () => {
    formDisabled.value = true
    store
      .dispatch('FormModule/sendForm', {
        name: name.value,
        message: message.value,
      })
      .then(() => {
        router.push({
          name: 'list',
        })
      })
      .catch(() => {
        console.error('Error')
      })
      .finally(() => (formDisabled.value = false))
  }
</script>
