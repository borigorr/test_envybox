<template>
  <ListCard
    v-for="(item, key) in lisForms"
    :key="key"
    class="mb-1"
    :name="item.name"
    :message="item.message"
  />
</template>
<script lang="ts" setup>
  import ListCard from '@/components/ListCard.vue'
  import { computed } from 'vue'
  import { useStore } from 'vuex'

  const store = useStore()

  const lisForms = computed(() => store.getters['FormModule/getFormData'])
</script>
