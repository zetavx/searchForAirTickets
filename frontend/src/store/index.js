import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    tickets: []
  },
  mutations: {
    increment (state, tickets) {
      state.tickets = tickets
    }
  },
  actions: {
  },
  modules: {
  }
})
