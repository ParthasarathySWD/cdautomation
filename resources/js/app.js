require('./bootstrap');

import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import { routes } from './routes.js';
import MainApp from './components/MainApp.vue';
import Vuelidate from 'vuelidate'

import axios from 'axios'
import VueAxios from 'vue-axios'

import Select2 from 'v-select2-component';

Vue.use(Vuelidate)


Vue.use(Vuetify)
Vue.use(Select2)
Vue.use(VueAxios, axios);

const opts = {
    icons: {
        iconfont: 'mdi', // default - only for display purposes
    },
}

const vuetify = new Vuetify(opts)

Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    routes,
    mode: 'history',
    components: {
        MainApp
    }

});

const app = new Vue({
    el: '#app',
    router,
    vuetify,
    components: {
        MainApp
    },
    data:{
        dates: 'dd'
    }
});

  

