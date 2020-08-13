
import Vue from 'vue';
import Vuex from 'vuex';
// import VueResource from 'vue-resource';
import actions from './actions';
import mutations from './mutations';
import getters from './getters';
// Vue.use(VueResource);
Vue.use(Vuex);

const state = {
    arrProductList:''
};
export const store = new Vuex.Store({
    state,
    getters,
    mutations,
    actions
});
