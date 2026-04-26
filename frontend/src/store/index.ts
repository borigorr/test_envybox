import { createStore } from 'vuex'
import FormModule from '@/store/modules/FormModule'

export const store = createStore({
  modules: {
    FormModule,
  },
})
