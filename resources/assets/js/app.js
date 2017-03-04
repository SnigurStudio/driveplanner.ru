import Vue from 'vue'
import jQuery from 'jquery'
window.$ = window.jQuery = jQuery;

import 'remodal'
import 'remodal/dist/remodal.css'
import 'remodal/dist/remodal-default-theme.css'

$('[data-remodal-id=modal]').remodal({});

import Register from './components/Register.vue';
Vue.component( 'Register', Register );


let app = new Vue({
    el: '#main'
});
