import { createWebHistory, createRouter } from 'vue-router'
import Home from '@/views/Home.vue'
import ListForm from '@/views/ListForm.vue'

const routes = [
  { path: '/', component: Home, name: 'home' },
  { path: '/list', component: ListForm, name: 'list' },
]

export const router = createRouter({
  history: createWebHistory(),
  routes,
})
