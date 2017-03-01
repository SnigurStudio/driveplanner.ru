window.$ = require('jquery');
var Vue = require('vue');


require('remodal');
require('remodal/dist/remodal.css');
require('remodal/dist/remodal-default-theme.css');
$('[data-remodal-id=modal]').remodal({});

import Test from './components/test.vue';
Vue.component( 'Test', Test );


let test = new Vue({
    el: '#vue-container'
});
