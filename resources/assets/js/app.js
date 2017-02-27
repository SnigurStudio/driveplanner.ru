window.$ = require('jquery');
var Vue = require('vue');




import Test from './components/test.vue';
Vue.component( 'test', Test );


let test = new Vue({
    el: '#vue-container'
});
