import './bootstrap';

import { createApp } from "vue/dist/vue.esm-bundler";
import * as VueRouter from 'vue-router';
import {routes} from './routes'

const app = createApp({});

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes
})

app.use(router)

app.mount('#app')
