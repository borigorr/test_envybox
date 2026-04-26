import { type Module } from 'vuex'
import axios from '@/utils/axios'

type FormData = {
  message: string
  name: string
}

type State = {
  formData: FormData[]
}

const FormModule: Module<State, object> = {
  namespaced: true,
  state: {
    formData: [],
  },
  actions: {
    async sendForm({ commit }, data: FormData) {
      return axios.post('/save', data).then(() => {
        commit('addForm', data)
      })
    },
  },
  mutations: {
    addForm(state, data: FormData) {
      state.formData.push(data)
    },
  },
  getters: {
    getFormData(state): FormData[] {
      return state.formData
    },
  },
}
export default FormModule
