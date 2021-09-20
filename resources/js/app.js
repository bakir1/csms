require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import Home from '../js/components/Home';
import Rate from '../js/components/Rate';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

const routes = [
    {
        name: '/',
        path: '/',
        component: Home
    },
    {
        name: '/rate',
        path: '/rate',
        component: Rate
    }

]

const router = new VueRouter({mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
