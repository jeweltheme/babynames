
require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use( VueRouter )

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('app-navbar', require('./components/Navbar.vue'));
Vue.component('app-footer', require('./components/Footer.vue'));
Vue.component('app-home', require('./components/Home.vue'));
Vue.component('app-about', require('./components/About.vue'));
//Vue.component('app-add', require('./components/Add.vue'));

const routes = [
    { path: '/home', component: require('./components/Home.vue') },
    { path: '/about', component: require('./components/About.vue') },
]

const router = new VueRouter({
    //mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router
});
