require('./bootstrap')

window.Vue = require('vue')

import vueRouter from 'vue-router'
import vueAxios from 'vue-axios'
import axios from 'axios'

Vue.use(vueRouter, vueAxios, axios)

import App from './components/App.vue'
import Read from './components/Read.vue'
import Create from './components/Create.vue'
import Update from './components/Update.vue'

const routes = [
    {
        name: 'read',
        path: '/',
        component: Read
    },
    {
        name: 'create',
        path: '/create',
        component: Create
    },
    {
        name: 'update',
        path: '/detail/:id',
        component: Update
    }
]

const router = new vueRouter({ mode: 'history', routes: routes });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");