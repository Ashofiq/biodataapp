import './bootstrap';

import { createApp } from "vue/dist/vue.esm-bundler";
import * as VueRouter from 'vue-router';
import {routes} from './routes'

// import notification
import Notification from './Helpers/Notification';
window.Notification = Notification

// sweet alert
import Swal from 'sweetalert2';
window.Swal = Swal

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
window.Toast = Toast

const app = createApp({});

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes
})

app.use(router)

app.mount('#app')
