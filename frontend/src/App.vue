<template>
  <header>
    <NavBar></NavBar>
  </header>
  <main class="p-2">
    <RouterView />
  </main>
</template>

<script setup lang="ts">
  import NavBar from '@/components/NavBar.vue'
</script>
