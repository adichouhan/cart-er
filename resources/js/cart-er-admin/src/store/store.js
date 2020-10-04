import Vue from 'vue';
import Vuex from 'vuex';
import actions from './actions';
import mutations from './mutations';
import getters from './getters';

Vue.use(Vuex);

const state = {
    arrProductList : ''
};

const store = new Vuex.Store({
    namespace:true,
    state,
    getters,
    mutations,
    actions
});


export default store;