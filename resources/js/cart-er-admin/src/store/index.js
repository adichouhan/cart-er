require('../../bootstrap');

import Vuex from 'vuex';
// import VueResource from 'vue-resource';

window.Vue = require('vue');

Vue.use(Vuex);
// Vue.use(VueResource);

// To use confirm alerts
import VuejsDialog from "vuejs-dialog"
Vue.use(VuejsDialog, {
    okText: 'Yes',
    cancelText: 'No',
})

import commentModule		from './store';
// import globalStore          from  './../../store';

export default new Vuex.Store({
    modules: {
        commentModule,
    },
});
