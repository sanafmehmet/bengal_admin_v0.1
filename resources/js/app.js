require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//Import User Class
import User from './helpers/User'
window.User = User

window.Reload = new Vue()

//Import Notification Class
import Notification from './helpers/Notification'
window.Notification = Notification

import Topbar from './components/topbar.vue'
Vue.component('top-bar', Topbar)

import LeftSideBar from './components/leftsidebar.vue'
Vue.component('left-sidebar', LeftSideBar)

//SweetAlert Start
import Swal from 'sweetalert2'
window.Swal = Swal

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    // timerProgressBar: true,
    // onOpen: (toast) => {
    //   toast.addEventListener('mouseenter', Swal.stopTimer)
    //   toast.addEventListener('mouseleave', Swal.resumeTimer)
    // }
})
window.Toast = Toast
//End SweetAlert

import Pagination from 'laravel-vue-pagination'
Vue.component('pagination', Pagination)

//Vue.component('pagination', require('laravel-vue-pagination'));

//Vue.component('paginate', VuejsPaginate)


import { routes } from './routes'
const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router
})