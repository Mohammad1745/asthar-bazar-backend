
// require('./bootstrap');
//
// window.Vue = require('vue').default;
//
//
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// const app = new Vue({
//     el: '#app',
// });

import Vue from "vue";

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueAxios from "vue-axios";
import axios from "axios";
Vue.use(VueAxios, axios);

import App from './App.vue'
import {routes} from "./router";
const router = new VueRouter({mode: 'history', routes});
router.beforeEach((toRoute, fromRoute, next) => {
    window.document.title = toRoute.meta && toRoute.meta.title ? toRoute.meta.title : 'Admin - Asthar Bazar';

    next();
})
new Vue(Vue.util.extend({router}, App)).$mount('#app')
