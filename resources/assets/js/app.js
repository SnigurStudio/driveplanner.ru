import Vue from 'vue'

import jQuery from 'jquery'
window.$ = window.jQuery = jQuery;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

import 'remodal'
import 'remodal/dist/remodal.css'
import 'remodal/dist/remodal-default-theme.css'



import FormLoader from './components/FormLoader.vue';
Vue.component( 'FormLoader', FormLoader );

import Register from './components/Register.vue';
Vue.component( 'Register', Register );

import Login from './components/Login.vue';
Vue.component( 'Login', Login );

let app = new Vue({
    el: '#main'
});
